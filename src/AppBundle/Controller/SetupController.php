<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Post;

use AppBundle\Form\BudgetCodeType;
use AppBundle\Form\CustomerType;
use AppBundle\Form\IncomeType;
use AppBundle\Form\SetupAccountType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * Handles the finishing of setting up account, removed from accounts controller to separate out the concern
 */
class SetupController extends Controller
{
  /**
   * Allows a user to set up the rest of their profile
   */
  public function setUpAccountAction(Request $request)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return new redirectToRoute('login');
    }

    if ($this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('control_summary');
    }

    // Create the form and get it to handle the request for us
    $form = $this->createForm(SetupAccountType::class);
    $form->handleRequest($request);

    // Update the user object, remembering to store the changes in the database.
    if ($form->isSubmitted() && $form->isValid())
    {
      $em = $this->getDoctrine()->getManager();
      $user = $this->get('security.token_storage')->getToken()->getUser();

      $user->setIsSetup(true);
      $user->setOrganisationName($form['organisationName']->getData());
      $user->setOrganisationDescription($form['organisationDescription']->getData());

      $em->persist($user);
      $em->flush();

      return $this->redirectToRoute('index');
    }


    return $this->render('AppBundle:user:page_setup-account.html.twig', array(
      'form'=>$form->createView() ));
  }


}
