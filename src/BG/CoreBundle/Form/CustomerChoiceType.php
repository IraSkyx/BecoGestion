<?php

namespace BG\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class CustomerChoiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('customer', Select2EntityType::class, array(
            'class' => '\BG\CoreBundle\Entity\Customer',
            'multiple' => false,
            'remote_route' => 'BG_CoreBundle_getcustomers',
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
            'data_class' => 'BG\CoreBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_corebundle_customer';
    }


}
