<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use AppBundle\Form\UploadMediaType;
use AppBundle\Entity\UploadedFile;
use AppBundle\Entity\MediaReference;
use AppBundle\Entity\AppToken;
use AppBundle\Entity\Post;
use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Aws\Sdk;


/**
 * Handles the storing and retrieval of media follow the QA Data standard
 */
class QAController extends Controller
{

  /**
   * Receives an uploaded file as part of a form, and then stores it in /web so it's publically accessible.
   */
  public function uploadMediaAction(Request $request)
  {
    $form = $this->createForm(UploadMediaType::class);

    $form->handleRequest($request);

    // Check if either the form was submitted, or if there's a file in the filebag from elsewhere.
    if ( ($form->isSubmitted() && $form->isValid()) || $request->files->get('media') !== NULL )
    {
      // Get the file that's uploaded, guess its extension, and generate a the filehash
      $file = NULL;
      if ( $form->isSubmitted() )
      {
        $file = $form['media']->getData();
      } else
      {
        $file = $request->files->get('media');
      }


      $filehash = sha1_file($file);
      $extension = $file->guessExtension();

      $s3Uploader = $this->get('app.s3_uploader');
      $storageURL = $s3Uploader->uploadFile($file);

      // Create an entry in the database for the reference, to allow redirects
      $databaseEntry = new MediaReference();
      $databaseEntry->setFilehash($filehash);
      $databaseEntry->setUrl($storageURL);
      $em = $this->getDoctrine()->getManager();
      $em->persist($databaseEntry);
      $em->flush();


      return $this->redirectToRoute('qa-media_view', array('filehash' => $filehash ));


    }

    return $this->render('AppBundle:landing:page_qa-media.html.twig', array('form'=>$form->createView() ));
  }

  /**
   * Returns a file based on the filehash
   */
  public function getMediaAction(Request $request, $filehash)
  {
    $media = $this->getDoctrine()->getRepository('AppBundle:MediaReference')->findOneByFilehash($filehash);


    return $this->redirect($media->getUrl());
  }

  /**
   * Returns a template with the file embedded, based on the hash
   */
  public function viewMediaAction(Request $request, $filehash)
  {
    $media = $this->getDoctrine()->getRepository('AppBundle:MediaReference')->findOneByFilehash($filehash);

    return $this->render('AppBundle:landing:page_qa-data.html.twig', array('media'=>$media));
  }

  /**
   * Receives a QA-formatted payload and a token for identification
   */
  public function uploadPostAction(Request $request)
  {
    $requestData = json_decode($request->getContent(), true);

    $submittedToken = $requestData["token"];
    $token = $this->getDoctrine()->getRepository('AppBundle:AppToken')->findOneByToken($submittedToken);
    if ($token !== null)
    {
        $payload = $requestData["data"];

          $post = new Post();
          $post->setDateCreated(new \DateTime($payload['date_created']));
          $post->setDateGiven(new \DateTime($payload['date_given']));

          if ($payload['quote'] !== null)
          {
            $post->setQuoteContent($payload['quote']['text']);
            $post->setQuoteAttribution($payload['quote']['attribution']);
          }

          if ($payload['financial_data'] !== null && ($payload['financial_data']['value'] > 0 || $payload['financial_data']['value'] < 0)) // To have financial information, we want it to be not null, as well as be greater than or less than a soft zero. Otherwise we'd just have two != 0 and 0.00
          {
            $post->setFinancialValue($payload['financial_data']['value']);
            $post->setFinancialCurrency($payload['financial_data']['currency']);
          }

          if ($payload['media'] !== null && $payload['media'] !== "")
          {
              $post->setMediaURI($payload['media']);
          }

          if ($payload['location'] !== null)
          {
            $post->setLocationName($payload['location']['name']);
            $post->setLocationAddress($payload['location']['Address']);
            $post->setLocationLatitude($payload['location']['latitude']);
            $post->setLocationLongitude($payload['location']['longitude']);
          }

          if ($payload['description'] !== null)
          {
            $post->setDescription($payload['description']);
          }

          // Mark post as unreconciled
          $post->setReconciled(false);

          // Apply the user
          $post->setUser($token->getUser());
          $token->getUser()->addPost($post);

          // Save Post
          $em = $this->getDoctrine()->getManager();
          $em->persist($post);
          $em->persist($token->getUser());
          $em->flush();

              // Sort out the tags
              $tagParser = $this->get('app.tag_parser');
              $tagParser->parseTagsFromArray($post, $payload['tags']);

          return new Response("Post created with id ".$post->getID());


    } else
    {
      throw new AccessDeniedException;
    }

  }

}
