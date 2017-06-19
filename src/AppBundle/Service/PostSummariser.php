<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

use AppBundle\Entity\Post;
use AppBundle\Entity\Tag;
use AppBundle\Entity\User;

/**
* Handles producing summaries for various parts of the program
*/
class PostSummariser
{
  protected $em;
  protected $tagParser;

  function __construct(EntityManager $em, TagParser $tagParser)
  {
    $this->em = $em;
    $this->tagParser = $tagParser;
  }

  /**
  * Produces a summary for a given user
  * @return array
  */
  public function postsSummary($user)
  {
    // Set up the summary array
    $summary = array();
    $summary['balances'] = array();
    $summary['balances']['moneyTotal'] = 0;
    $summary['balances']['moneyOut'] = 0;
    $summary['balances']['moneyIn'] = 0;

    $summary['post_types'] = array();
    $summary['post_types']['total'] = count($user->getPosts());
    $summary['post_types']['images'] = 0;
    $summary['post_types']['locations'] = 0;
    $summary['post_types']['quotes'] = 0;

    // Iterate over each post
    foreach ($user->getPosts() as $p)
    {
      if ($p->getReconciled())
      {
        if ($p->getFinancialValue() >= 0)
        {
          // Count as money in
          $summary['balances']['moneyIn'] = $summary['balances']['moneyIn'] + $p->getFinancialValue();
        } else
        {
          // Count as money out
          $summary['balances']['moneyOut'] = $summary['balances']['moneyOut'] + $p->getFinancialValue();
        }

        if ($p->getMediaURI() !== NULL)
        {
          $summary['post_types']['images'] = $summary['post_types']['images'] + 1;
        }

        if ($p->getLocationName() !== NULL)
        {
          $summary['post_types']['locations'] = $summary['post_types']['locations'] + 1;
        }

        if ($p->getQuoteContent() !== NULL)
        {
          $summary['post_types']['quotes'] = $summary['post_types']['quotes'] + 1;
        }

        // Total doesn't care
        $summary['balances']['moneyTotal'] = $summary['balances']['moneyTotal'] + $p->getFinancialValue();
      }
    }

    return $summary;

  }

  /**
   * Returns an arbitrary limit of most used tags that defaults to 10
   * @return array
   */
  public function mostFrequentTags($user, $limit = 0)
  {
    $tags = $this->em->getRepository('AppBundle:Tag')->createQueryBuilder('t')->where('t.user = :user')->setParameter('user', $user)->getQuery()->getResult();

    // Resort to usort because doctrine fails at ordering by count
    usort($tags, function($a, $b){
      return count($b->getPosts()) - count($a->getPosts());
    });

    if ($limit > 0)
    {
      // Now trim, also because doctrine being poopy
      $tags = array_slice($tags, 0, $limit);
    }

    $tagMap = array();
    foreach ($tags as $t)
    {
      // Prevent tags with zero entries from getting through
      if (count($t->getPosts()) > 0)
      {
        $count = array();
        $count['tag'] = $t->getName();
        $count['number'] = count($t->getPosts());

        array_push($tagMap, $count);
      }
    }

    return $tagMap;
  }

  /**
   * Returns total income
   */
  public function totalIncome($user)
  {
    $posts = $this->em->getRepository('AppBundle:Post')->createQueryBuilder('p')
    ->where('p.financialValue > 0')
    ->andWhere('p.user = :user')
    ->setParameter('user', $user)
    ->getQuery()
    ->getResult();

    // Get the total
    $total = 0;
    foreach ($posts as $p)
    {
      $total += $p->getFinancialValue();
    }

    return $total;

  }

  /**
   * Returns a summary of an organisation's income by funder and all total posts
   */
  public function incomeBySource($user)
  {
      // Get all of the user's customers, use their relationship to posts to add to a total
      $customerTotals = array();
      foreach ($user->getCustomers() as $c)
      {
        $custTotal = array();
        $custTotal['customer'] = $c->getName();
        $custTotal['total'] = 0.00;
        foreach ($c->getPosts() as $p)
        {
          $custTotal['total'] += $p->getFinancialValue();
        }

        array_push($customerTotals, $custTotal);
      }
      return $customerTotals;
  }

  /**
   * Returns an array of user's posts that match the intersection of a tagstring
   */
  public function postsByTag($user, $tagstring)
  {
    // Parse the tagstring, get an array of tags
    $requestedTags = $this->tagParser->retrieveTagsFromTagString($user, $tagstring, "+");

    // Loop over requested tags, retrieve an array of their posts, and add this to a master array
    $data = array();
    foreach ($requestedTags as $tag)
    {
      // We want to get the array of posts and do an intersection with $data, since data will definitely already contain ALL of the posts we want (it's an intersection)
      if (sizeof($data) === 0) // If data is empty, then we fall back to the next set of tags
      {
        $data = array_merge($data, $tag->getPosts()->getValues());
      } else
      {
        $data = array_intersect($data, $tag->getPosts()->getValues());
      }
    }

    return $data;
  }
}
