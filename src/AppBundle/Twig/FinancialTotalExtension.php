<?php

namespace AppBundle\Twig;


/**
* Acts as a wrapper for the PHP abs() function
* Developed for the use-case where a post has a financial value and can be either positive or   * negative, denoting income or spend.
*/
class FinancialTotalExtension extends \Twig_Extension
{
  public function getFilters()
  {
    return array( new \Twig_SimpleFilter('finTotal', array($this, 'finTotalFilter')),
          );
  }


  public function finTotalFilter($number)
  {

    if ($number < 0)
    {
      return '-£'.abs($number);
    } else
    {
      return '£'.abs($number);
    }

  }

  public function getName()
  {
    return 'financialtotal_extension';
  }

}
