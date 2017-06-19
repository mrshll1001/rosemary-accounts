<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;



class IncomeType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

      $user = $options['user'];

      $builder->add('financialValue', NumberType::class, array(
        'required'=>true,
        'label' => "Amount",
        'attr' => array('placeholder' => 'e.g. £9.99')))
      ->add('description', TextareaType::class, array(
        'required' => true,
        'attr' => array('class'=>'materialize-textarea', 'placeholder' => 'A brief description of the income e.g. for a project')
      ))
      ->add('customer', EntityType::class, array(
        'class' => 'AppBundle:Customer',
        'query_builder' => function (\AppBundle\Repository\CustomerRepository $er) use ($user)
                          {
                            return $er->createQueryBuilder('c')
                                    ->where('c.user = :user')
                                    ->setParameter('user', $user);
                          },
        'choice_label' => 'name',
        'attr' => array('class'=>'browser-default')
      ))
      ->add('dateGiven', DateType::class, array(
        'label' => "Date",
        'required'=>true,
        'widget'=>'single_text',
        'attr'=> array('class' => 'datepicker')
      ))
      ->add('tags', HiddenType::class, array(
        'mapped' => false,
        'attr' => array('value' => "")
      ));


  }

  /**
   * Options resolver http://stackoverflow.com/questions/43092246/symfony-3-passing-variables-into-forms/43092919#43092919
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setAllowedTypes('user', array(User::class, 'int'));
  }

}
