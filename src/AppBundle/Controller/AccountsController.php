<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Post;
use AppBundle\Entity\AppToken;
use AppBundle\Entity\MediaReference;


use AppBundle\Form\BudgetCodeType;
use AppBundle\Form\CustomerType;
use AppBundle\Form\IncomeType;
use AppBundle\Form\ExpenseType;
use AppBundle\Form\GenerateTokenType;
use AppBundle\Form\ImagePostType;
use AppBundle\Form\EventPostType;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use Sinergi\Token\StringGenerator;
use Doctrine\Common\Collections\Criteria;

/**
 * Controller to handle the accounts actions in the control panel
 */
class AccountsController extends Controller
{


  /**
   * Basic summary and home socket_create_listen
   */
  public function summaryAction(Request $request)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Get all the posts
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $postSummariser = $this->get('app.post_summariser');

    // Get a summary of the posts
    $summary = $postSummariser->postsSummary($user);
    $tagMap = $postSummariser->mostFrequentTags($user, 10);

    return $this->render('AppBundle:user/page:page_summary.html.twig', array('summary'=>$summary, 'tag_count'=>$tagMap));

  }

  public function myPostsAction(Request $request)
  {
    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    $user = $this->get('security.token_storage')->getToken()->getUser();

    $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findByUser($user);

    return $this->render('AppBundle:user/page:page_my-posts.html.twig', array('posts'=>$posts));

  }

  /**
   * Page that collects all the unreconciled accouints
   */
  public function incomingPostsAction(Request $request)
  {
    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Get the user and all their unreconciled posts
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAllNotReconciled($user);

    //TODO Construct the form for removing posts here, with a variable for route to return to as a hidden input. Then apply the form in the card under an if statement

    return $this->render('AppBundle:user/page:page_incoming-posts.html.twig', array('posts' => $posts));
  }


  public function searchTagsAction(Request $request, $tagstring)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // TODO split the tagstring, and find all tags with that name (and user), and then retrieve their posts
    $postRepository = $this->getDoctrine()->getRepository('AppBundle:Post');
    $tagRepository = $this->getDoctrine()->getRepository('AppBundle:Tag');
    $tags = array();

    foreach(explode(',', $tagstring) as $tagName)
    {
      array_push($tags, $tagRepository->findOneByName($tagName));
    }

    $posts = array();

    foreach ($tags as $tag)
    {
      array_push($posts, $postRepository->createQueryBuilder('p')->where(':tag MEMBER OF p.tags')->setParameter('tag', $tag)->getQuery()->getResult());
    }

    // var_dump($posts);

    return $this->render('AppBundle:user/page:page_search-tags.html.twig', array('posts'=>$posts, 'searchTerm'=>$tagstring));
  }

  public function viewExpenseAction(Request $request)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Get all posts which belong to the user, AND have a negative financial value.
    $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->createQueryBuilder('p')->where('p.financialValue < 0')->andWhere('p.user = :user')->setParameter('user', $this->get('security.token_storage')->getToken()->getUser())->getQuery()->getResult();

    $total = 0;
    foreach ($posts as $p)
    {
      $total += $p->getFinancialValue();
    }

    $post = new Post();
    $form = $this->createForm(ExpenseType::class, $post);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid())
    {
        // Start setting the post things
        $post->setFinancialValue(0 - floatval($form['financialValue']->getData()));
        $post->setDescription($form['description']->getData());
        $post->setDateGiven($form['dateGiven']->getData());
        $post->setDateCreated(new \DateTime());
        $post->setReconciled(true);

        $post->setUser($this->get('security.token_storage')->getToken()->getUser());

        // Do the doctrine thing
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        // Now that we have the post stored, we can parse tha tag string and update the tags in the system
        $tagParser = $this->get('app.tag_parser');
        $tagParser->parseTagsFromArray($post, explode(',', $form['tags']->getData()));

        return $this->redirectToRoute('expenses');

    }


    return $this->render('AppBundle:user/page:page_view-expense.html.twig', array('posts' => $posts, 'total'=>$total, 'form'=>$form->createView()) );
  }

  /**
   * Provides a list of all income
   */
  public function viewIncomeAction(Request $request)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Get all posts which belong to the user, AND have a positive financial value.
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAllIncome($user);

    // Get the totals overall and per customer
    $postSummariser = $this->get('app.post_summariser');
    $total = $postSummariser->totalIncome($user);
    $customerTotals = $postSummariser->incomeBySource($user);

    // Form Stuff
    $post = new Post();
    $form = $this->createForm(IncomeType::class, $post, array('user'=>$user));

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      // Begin with the post things
      $post->setFinancialValue(floatval($form['financialValue']->getData()));
      $post->setDateGiven($form['dateGiven']->getData());
      $post->setDateCreated(new \DateTime());
      $post->setCustomer($form['customer']->getData());
      $post->setReconciled(true);
      $post->setUser($this->get('security.token_storage')->getToken()->getUser());

      // Do the doctrine thing
      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();

      // Now that we have the post stored, we can parse tha tag string and update the tags in the system
      $tagParser = $this->get('app.tag_parser');
      $tagParser->parseTagsFromArray($post, explode(',', $form['tags']->getData()));

      return $this->redirectToRoute('income');

    }


    return $this->render('AppBundle:user/page:page_view-income.html.twig', array('posts' => $posts, 'total'=>$total, 'customerTotals'=>$customerTotals, 'form'=>$form->createView()) );

  }


  /**
   * This creates a tag with the isBudgetCode() set to True;
   */
  public function budgetCodeAction(Request $request, $tagstring = null)
  {
    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Stuff to handle a form
    $tag = new Tag();
    $form = $this->createForm(BudgetCodeType::class, $tag);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid() )
    {
      $tag = $form->getData();
      $tag->setBudgetCode(true);
      $tag->setUser($this->get('security.token_storage')->getToken()->getUser());

      $em = $this->getDoctrine()->getManager();
      $em->persist($tag);
      $em->flush();

      return $this->redirectToRoute('budget_codes');
    }

    // Display the list of current tags that have been marked as budget codes
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $budgetCodes = $this->getDoctrine()->getRepository('AppBundle:Tag')->findBudgetCodes($user);
    $orderedTags = $this->get('app.post_summariser')->mostFrequentTags($user);

    // Retrieve the requested tags, extracted from the search term
    $requestedTags = null;
    $results = null;

    if ($tagstring !== null)
    {
      $requestedTags = $this->get('app.tag_parser')->retrieveTagsFromTagString($user, $tagstring, "+");
      $results = $this->get('app.post_summariser')->postsByTag($user, $tagstring);
    }

    return $this->render('AppBundle:user:budget_codes.html.twig', array('form' => $form->createView(), 'budgetCodes' =>$budgetCodes, 'ordered_tags'=>$orderedTags, 'requested_tags'=>$requestedTags, 'results'=>$results ));

  }

  /**
   * This allows people to add a customer or a funder to the database for use with invoice style posts
   */
  public function customerAction(Request $request)
  {

    // Security check
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      return $this->redirectToRoute('login');
    }

    // Setup check
    if (!$this->get('security.token_storage')->getToken()->getUser()->getIsSetup())
    {
      return $this->redirectToRoute('user_post-registration');
    }

    // Stuff to handle form
    $customer = new Customer();
    $form = $this->createForm(CustomerType::class, $customer);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      $customer = $form->getData();
      $customer->setUser($this->get('security.token_storage')->getToken()->getUser());

      $tag = new Tag();
      $tag->setUser($this->get('security.token_storage')->getToken()->getUser());
      $tag->setName($customer->getName());
      $tag->setBudgetCode(false);

      $em = $this->getDoctrine()->getManager();
      $em->persist($customer);
      $em->persist($tag);
      $em->flush();


      return $this->redirectToRoute('customers');
    }

    // Get customers that belong to this particular user
    $customers = $this->getDoctrine()->getRepository('AppBundle:Customer')->createQueryBuilder('c')->where('c.user = :user')->setParameter('user', $this->get('security.token_storage')->getToken()->getUser())->getQuery()->getResult();

    // Render
    return $this->render('AppBundle:user:customers.html.twig', array('form'=> $form->createView(),'customers'=> $customers ));

  }

  /**
   * Allows the user to configure additional applications
   */
  public function configureAppsAction(Request $request)
  {
    $appToken = new AppToken();
    $form = $this->createForm(GenerateTokenType::class, $appToken);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      $appToken = $form->getData();
      $appToken->setToken(StringGenerator::randomAlnum(10));
      $appToken->setUser($this->get('security.token_storage')->getToken()->getUser());

      $em = $this->getDoctrine()->getManager();
      $em->persist($appToken);
      $em->flush();

      return $this->redirectToRoute('configure_apps');
    }

    // Display the list of current tags that have been marked as budget codes
    $tokens = $this->getDoctrine()->getRepository('AppBundle:AppToken')->createQueryBuilder('t')->where('t.user = :user')->setParameter('user', $this->get('security.token_storage')->getToken()->getUser())->getQuery()->getResult();


    return $this->render('AppBundle:user/page:page_configure-apps.html.twig', array('form'=>$form->createView(), 'tokens' => $tokens ));
  }

  /**
   * Creates a post with location data
   */
  public function createEventPostAction(Request $request)
  {
    $user = $this->get('security.token_storage')->getToken()->getUser();

    // Set up the form
    $post = new Post();

    $form = $this->createForm(EventPostType::Class, $post);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      $post = $form->getData();
      $post->setUser($user);
      $post->setReconciled(true);

      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->flush();

      // Now that we have the post stored, we can parse tha tag string and update the tags in the system
      $tagParser = $this->get('app.tag_parser');
      $tagParser->parseTagsFromArray($post, explode(',', $form['tags']->getData()));

      return $this->redirectToRoute('post_event_page');

    }

    return $this->render('AppBundle:user/page:page_post_event.html.twig', array('form'=>$form->createView()));

  }

  /**
   * Creates a post with an Image
   */
  public function createImagePostAction(Request $request)
  {
    // Perform checks
    $user = $this->get('security.token_storage')->getToken()->getUser();

    // Create form
    $post = new Post();
    $form = $this->createForm(ImagePostType::class, $post);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid())
    {
      // Get the description, and dates
      $post->setDescription($form['description']->getData());
      $post->setDateGiven($form['dateGiven']->getData());
      $post->setDateCreated(new \DateTime());
      $post->setUser($user);
      $post->setReconciled(true);


      // Create an S3 uploader to get the media uri
      $s3Uploader = $this->get('app.s3_uploader');
      $storageURI = $s3Uploader->uploadFile($form['media']->getData());
      $post->setMediaURI($storageURI);

      $mediaRef = new MediaReference();
      $mediaRef->setFilehash(sha1_file($form['media']->getData()));
      $mediaRef->setUrl($storageURI);

      // Persist things
      $em = $this->getDoctrine()->getManager();
      $em->persist($post);
      $em->persist($mediaRef);
      $em->flush();

      // Now that we have the post stored, we can parse tha tag string and update the tags in the system
      $tagParser = $this->get('app.tag_parser');
      $tagParser->parseTagsFromArray($post, explode(',', $form['tags']->getData()));

      // Finally, redirect
      return $this->redirectToRoute('post_image_page');

    }


    return $this->render('AppBundle:user/page:page_post_image.html.twig', array('form' => $form->createView()) );
  }



}
