<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class GenerateTokenType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder->add('name', TextType::class);
  }

}
