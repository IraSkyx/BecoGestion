<?php

namespace BG\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class OptionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('customer', Select2EntityType::class, array(
            'class' => '\BG\CustomerBundle\Entity\Customer',
            'multiple' => false,
            'remote_route' => 'BG_CustomerBundle_get',
            'minimum_input_length' => 0,
            'allow_clear' => true,
            'language' => 'fr',
            'placeholder' => 'Choisir un client'
          ));
    }/**
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
