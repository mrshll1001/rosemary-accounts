<?php

namespace AppBundle\Twig;


/**
* Acts as a wrapper for the PHP abs() function
* Developed for the use-case where a post has a financial value and can be either positive or   * negative, denoting income or spend.
*/
class AbsoluteValueExtension extends \Twig_Extension
{
  public function getFilters()
  {
    return array( new \Twig_SimpleFilter('absVal', array($this, 'absoluteValueFilter')),
                  new \Twig_SimpleFilter('fintotal', array($this, 'finTotalFilter'))
          );
  }


  public function absoluteValueFilter($number)
  {
    return abs($number);
  }

  public function finTotalFilter($number, $showAsNegative = false)
  {

    $prefix = null;
    if ($number < 0 && $showAsNegative)
    {
      $prefix = '-£';
    } else
    {
      $prefix = "£";
    }

    return $prefix.number_format( abs($number), 2 );
    // return $prefix.money_format('%i', abs($number));

  }

  public function getName()
  {
    return 'absolutevalue_extension';
  }

}
