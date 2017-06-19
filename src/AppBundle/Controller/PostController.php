<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Post;
use AppBundle\Entity\AppToken;

use AppBundle\Form\BudgetCodeType;
use AppBundle\Form\CustomerType;
use AppBundle\Form\IncomeType;
use AppBundle\Form\ExpenseType;
use AppBundle\Form\GenerateTokenType;
use AppBundle\Form\EditPostType;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use Sinergi\Token\StringGenerator;

/**
 * Designed to handle some actions for post creation that don't require pages in the accounts controller
 */
class PostController extends Controller
{

  /**
  * Approves a post by id
  */
  public function approvePostAction(Request $request, $id)
  {
    // Retrieve post and current user from database
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $post = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

    // Confirm that the current user is the owner of the Post
    if ($user === $post->getUser())
    {
      // mark the post as approved
      $post->setReconciled(true);
      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();
    }
    // redirect to incoming posts again
    return $this->redirectToRoute('incoming_posts');
  }

  /**
  * Removes a post by id
  */
  public function removePostAction(Request $request, $id)
  {
    // Retrieve post and current user from database
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $post = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

    // Confirm that the current user is the owner of the Post
    if ($user === $post->getUser())
    {
      $em = $this->getDoctrine()->getManager();
      $em->remove($post);
      $em->flush();
    }
    // redirect to incoming posts again
    return $this->redirectToRoute('incoming_posts');
  }

  /**
   * Page to edit a post
   *
   */
  public function editIncomingPostAction(Request $request, $id)
  {

    // Perform security stuff
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $post = $this->getDoctrine()->getRepository('AppBundle:Post')->find($id);

    // Check the user
    if ($user === $post->getUser())
    {
      // Set up the form to edit a post
      $form = $this->createForm(EditPostType::class, $post, array('user'=>$user, 'tagstring'=>$post->getTagString()));

      // Handle the form and edit / redirect
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())
      {
        $post = $form->getData();
        $post->setReconciled(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        return $this->redirectToRoute('incoming_posts');
      }

      // Render the template with the form and template
      return $this->render('AppBundle:user/page:page_edit_post.html.twig', array('form'=>$form->createView(), 'existing_tags'=>$post->getTags() ));
    } else
    {
      // Return to index if it's not their post
      return $this->redirect('index');
    }


  }

}
