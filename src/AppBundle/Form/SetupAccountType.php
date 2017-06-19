<?php
namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SetupAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('organisationName', TextType::class, array("required"=>true))
            ->add('organisationDescription', TextareaType::class, array("required"=>true,
          'attr'=>array('class'=>"materialize-textarea", 'placeholder'=>"Just a few words to describe who you are and what your work is")));
    }

}
