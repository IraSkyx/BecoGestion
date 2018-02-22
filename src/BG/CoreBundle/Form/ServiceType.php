<?php

namespace BG\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('isUsed', CheckboxType ::class, [
          'label' => false,
          'required' => false
        ])
        ->add('level', TextType::class, [
          'label' => false
        ])
        ->add('drawing', TextType::class, [
          'label' => false
        ])
        ->add('engTime', NumberType::class, [
          'label' => false,
          'required' => false,
          'empty_data' => '0'
        ])
        ->add('drawTime', NumberType::class, [
          'label' => false,
          'required' => false,
          'empty_data' => '0'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CoreBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_corebundle_service';
    }
}
