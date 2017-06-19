<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



/**
 * Allows user to upload a post with an image
 */
class ImagePostType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('description', TextareaType::Class, array(
      'required'=>true,
      'label' => "Description",
      'attr'=>array('class'=>'materialize-textarea', 'placeholder'=>"Enter a description for the post")
    ))
    ->add('media', FileType::class, array(
      'label'=>" ", 'mapped'=>false))
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
