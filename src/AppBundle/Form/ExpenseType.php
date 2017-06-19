<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ExpenseType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

      $builder->add('financialValue', NumberType::class, array(
        'required'=>true,
        'label' => "Amount",
        'attr' => array('placeholder' => 'e.g. £9.99')))
      ->add('description', TextareaType::Class, array(
        'required'=>true,
        'label' => "Description",
        'attr'=>array('class'=>'materialize-textarea', 'placeholder'=>"Some words to describe the expense")
      ))
      ->add('dateGiven', DateType::class, array(
        'widget' => 'single_text',
        'format' => 'yyyy-MM-dd',
        'attr' => array('class' => 'datepicker')
      ))
      ->add('tags', HiddenType::class, array(
        'mapped' => false,
        'attr' => array('value' => "")
      ));


  }

}
