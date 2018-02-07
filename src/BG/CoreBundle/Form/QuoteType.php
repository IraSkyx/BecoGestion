<?php

namespace BG\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use BG\CoreBundle\Form\ServiceType;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class QuoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('engRate', MoneyType::class)
          ->add('drawRate', MoneyType::class)
          ->add('vat', PercentType::class, [
            'scale' => 2
          ])
          ->add('customer', Select2EntityType::class, array(
            'class' => '\BG\CoreBundle\Entity\Customer',
            'multiple' => false,
            'remote_route' => 'BG_CoreBundle_getcustomers',
            'minimum_input_length' => 0,
            'allow_clear' => true,
            'language' => 'fr',
            'by_reference' => false,
            'placeholder' => 'Choisir un client'
          ))
          ->add('services', CollectionType::class, array(
          'entry_type'   => ServiceType::class,
          'label'        => false,
          'allow_add'    => true,
          'allow_delete' => true,
          'prototype'    => true
          ))
        ->add('save',  SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CoreBundle\Entity\Quote'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_corebundle_quote';
    }


}
