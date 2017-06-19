<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {


      // Redirect if they're authenticated
      if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
      {
        return $this->redirectToRoute('control_summary');
      }

        return $this->render('AppBundle:landing:index.html.twig', array());
    }

    public function termsAction(Request $request)
    {
      return $this->render('AppBundle:landing:toc.html.twig', array());
    }

    public function privacyAction(Request $request)
    {
      return $this->render('AppBundle:landing:page_privacy_policy.html.twig' ,array());
    }


    /**
     * Fires when requesting the featues and pricing Route
     */
    public function featuresAction(Request $request)
    {
      // Redirect if they're authenticated
      if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
      {
        return $this->redirectToRoute('control_summary');
      }

      return $this->render('AppBundle:landing:page_features.html.twig', array());
    }



    public function userCheckAction(Request $request)
    {
      return new Response("Success");
    }


    /**
     * Retrieves a list of all users on the system
     */
    public function organisationsAction(Request $request)
    {

      // Find all users which have actually set up their accounts!
      $repository = $this->getDoctrine()->getRepository('AppBundle:User');
      $query = $repository->createQueryBuilder('u')
                ->where('u.isSetup = :state')
                ->setParameter('state', '1') //SQL so 1 or 0 for true or false
                ->getQuery();
      $orgs = $query->getResult();

      return $this->render('AppBundle:landing:organisation_list.html.twig', array('orgs' => $orgs));
    }

    /**
     * Views the profile of one organisation
     */
    public function viewProfileAction(Request $request, $username)
    {
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsername($username);

      if ($user)
      {
          $postSummariser = $this->get('app.post_summariser');
          $summary = $postSummariser->postsSummary($user);
          $tagMap = $postSummariser->mostFrequentTags($user, 10);

          return $this->render('AppBundle:landing:page_profile.html.twig', array('organisation' => $user, 'summary'=>$summary, 'tag_map'=>$tagMap));
      } else
      {
        throw $this->createNotFoundException("Whoops, looks like that organisation doesn't exist!");
      }


    }

    /**
     * Views the collection of images in a gallery format
     */
    public function viewProfileGalleryAction(Request $request, $username)
    {
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsername($username);

      if ($user)
      {
          $postSummariser = $this->get('app.post_summariser');
          $summary = $postSummariser->postsSummary($user);
          $tagMap = $postSummariser->mostFrequentTags($user, 10);

          // Get Posts with images
          $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAllWithMedia($user);

          return $this->render('AppBundle:landing:page_profile_gallery.html.twig', array('organisation' => $user, 'summary'=>$summary, 'tag_map'=>$tagMap, 'posts'=>$posts));
      } else
      {
        throw $this->createNotFoundException("Whoops, looks like that organisation doesn't exist!");
      }
    }

    /**
     * Page dedicated to posts with events
     */
    public function viewProfileLocationPostsAction(Request $request, $username)
    {
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsername($username);

      if ($user)
      {
          $postSummariser = $this->get('app.post_summariser');
          $summary = $postSummariser->postsSummary($user);
          $tagMap = $postSummariser->mostFrequentTags($user, 10);

          // Get all of the posts with events data
          $events = $this->getDoctrine()->getRepository('AppBundle:Post')->findAllEvents($user);

          return $this->render('AppBundle:landing:page_profile_where.html.twig', array('organisation' => $user, 'summary'=>$summary, 'tag_map'=>$tagMap, 'events' => $events));
      } else
      {
        throw $this->createNotFoundException("Whoops, looks like that organisation doesn't exist!");
      }

    }

    /**
     * Initial page to allow users to enter search terms for posts
     */
    public function viewProfileTagsAction(Request $request, $username)
    {
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsername($username);

      if ($user)
      {
          $postSummariser = $this->get('app.post_summariser');
          $summary = $postSummariser->postsSummary($user);
          $tagMap = $postSummariser->mostFrequentTags($user, 10);

          // TODO Dump tags in a pile with numbers so users can search them effectively

          return $this->render('AppBundle:landing:page_profile_what.html.twig', array('organisation' => $user, 'summary'=>$summary, 'tag_map'=>$tagMap, 'requested_tags'=>null, 'results'=>null));
      } else
      {
        throw $this->createNotFoundException("Whoops, looks like that organisation doesn't exist!");
      }
    }

    /**
     * Returns a page with curated posts for a user to have
     */
    public function viewProfileSearchTagsAction(Request $request, $username, $tagstring)
    {
      $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByUsername($username);

      if ($user)
      {
          $postSummariser = $this->get('app.post_summariser');
          $summary = $postSummariser->postsSummary($user);
          $tagMap = $postSummariser->mostFrequentTags($user, 10);
          $data = $postSummariser->postsByTag($user, $tagstring);

          $tagParser = $this->get('app.tag_parser');
          $requestedTags = $tagParser->retrieveTagsFromTagString($user, $tagstring, "+");




          return $this->render('AppBundle:landing:page_profile_what.html.twig', array('organisation' => $user, 'summary'=>$summary, 'tag_map'=>$tagMap, 'requested_tags' => $requestedTags, 'results'=>$data));
      } else
      {
        throw $this->createNotFoundException("Whoops, looks like that organisation doesn't exist!");
      }
    }

    /**
     * Is a tutorial for setting up Accounting Scrapbook
     */
    public function accountingScrapbookTutorialAction(Request $request)
    {
      return $this->render('AppBundle:landing:page_tutorial_acc_scrapbook.html.twig', array());
    }

}
