<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/**
 * Allows the user to upload a post with location data
 */
class EventPostType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('locationName', TextType::Class, array(
      'required' => true))
      ->add('description', TextareaType::Class, array(
        'required'=>true,
        'label' => "Description",
        'attr'=>array('class'=>'materialize-textarea', 'placeholder'=>"Enter a description for the post")
      ))
      ->add('locationLatitude', HiddenType::Class, array(
        'attr' => array('value' => "")
      ))
      ->add('locationLongitude', HiddenType::Class, array(
        'attr' => array('value' => "")
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

}
