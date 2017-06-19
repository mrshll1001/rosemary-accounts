<?php
namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;
use AppBundle\Entity\Customer;



/**
 * Edit and approve incoming post
 */
class EditPostType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // Get the user
    $user = $options['user'];
    $tagstring = $options['tagstring'];

      $builder
              ->add('financialValue', NumberType::class, array(
                'required'=>true,
                'label' => "Amount (Use negative numbers to denote spend ie -10.50)",
                'attr' => array('placeholder' => 'e.g. £9.99')))
              ->add('description', TextareaType::Class, array(
                'required'=>true,
                'label' => "Description",
                'attr'=>array('class'=>'materialize-textarea', 'placeholder'=>"Some words to describe the expense")
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
                'placeholder' => "NONE (e.g. spending)",
                'required' =>false,
                'attr' => array('class'=>'browser-default')
              ))
              ->add('tags', HiddenType::class, array(
                'mapped' => false,
                'attr' => array('value' => $tagstring)
              ));

  }

  /**
   * Options resolver http://stackoverflow.com/questions/43092246/symfony-3-passing-variables-into-forms/43092919#43092919
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setAllowedTypes('user', array(User::class, 'int'));

    $resolver->setRequired('tagstring');
    $resolver->setAllowedTypes('tagstring', array('string'));
  }

}
