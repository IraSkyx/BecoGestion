<?php

namespace BG\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('companyName', TextType::class)
          ->add('siren', IntegerType::class)
          ->add('intra', IntegerType::class)
          ->add('phone', IntegerType::class)
          ->add('mail', EmailType::class)
          ->add('address', TextType::class)
          ->add('postcode', IntegerType::class)
          ->add('city', TextType::class)
          ->add('representatives', CollectionType::class, [
            'entry_type' => RepresentativeType::class,
            'label' => false,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true
          ])
          ->add('save', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CustomerBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_customerbundle_customer';
    }


}
