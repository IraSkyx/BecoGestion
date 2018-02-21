<?php

namespace BG\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BG\CoreBundle\Entity\BaseService;

class BuildingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('num', HiddenType::class)
        ->add('floors', NumberType::class)
        ->add('basements', NumberType::class)
        ->add('gardenLevel', CheckboxType::class, [
          'required' => false
        ])
        ->add('num', HiddenType::class)
        ->add('services', CollectionType::class, [
          'entry_type' => ServiceType::class,
          'label' => false
        ])
        ->add('specialServices', CollectionType::class, [
          'entry_type' => ServiceType::class,
          'label' => false,
          'allow_add' => true,
          'allow_delete' => true,
          'prototype' => true
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CoreBundle\Entity\Building'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_corebundle_building';
    }


}
