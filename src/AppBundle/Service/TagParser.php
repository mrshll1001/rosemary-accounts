<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

use AppBundle\Entity\Post;
use AppBundle\Entity\Tag;
use AppBundle\Entity\User;


/**
 * Handles parsing tags and checking them for existing tags, then associating or creating appropriately with posts.
 */
class TagParser
{
  // For CRUD
  protected $em;


  // Construct with a doctrine EM
  function __construct(EntityManager $em)
  {
    $this->em = $em;
  }

  // /**
  //  * Takes a comma separated tagstring and parses
  //  */
  // public function parseTagsFromString($post, $tagString)
  // {
  //
  // }

  /**
   * Takes an array of tags and a post and checks each against the existing database
   */
  public function parseTagsFromArray($post, $tags)
  {
    $repository = $this->em->getRepository('AppBundle:Tag'); // Get the repository of tags

    // Iterate over and check if it exists
    foreach ($tags as $newTag)
    {
      $tag = $repository->findOneByName($newTag);

      if ($tag) // If it exists, update it
      {
        // Check that the relationship doesn't already exist
        if (!$post->getTags()->contains($tag))
        {
          $tag->addPost($post);
          $this->em->persist($tag);
        }

      } else // Else, create it
      {
        $tag = new Tag();
        $tag->setName($newTag);
        $tag->setBudgetCode(false);
        $tag->addPost($post);
        $tag->setUser($post->getUser());
        $this->em->persist($tag);
      }

      $post->addTag($tag);

      // Whatever happens we want it to run, so flush it
      $this->em->flush();

    }
  }

  /**
   * Retrieves an array of tag objects based on user and a string that's parsed
   */
  public function retrieveTagsFromTagString($user, $tagstring, $delimiter)
  {
    // // Parse the tagstring, get an array of tags
    $requestedTags = array();
    foreach (explode($delimiter, $tagstring) as $str)
    {
      $tag = $this->em->getRepository('AppBundle:Tag')->createQueryBuilder('t')->where('t.user = :user')->setParameter('user', $user)->andWhere('t.name = :name')->setParameter('name', $str)->getQuery()->getResult();

      if ($tag)
      {
        array_push($requestedTags, $tag[0]);
      }
    }

    return $requestedTags;
  }

}
