<?php

namespace AppBundle\Repository;

/**
 * TagRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagRepository extends \Doctrine\ORM\EntityRepository
{
  
  public function findBudgetCodes($user)
  {
    return $this->getEntityManager()
    ->createQuery(
    'SELECT t FROM AppBundle:Tag t WHERE t.budgetCode = true AND t.user = '.$user->getId()
    )
    ->getResult();
  }
}
