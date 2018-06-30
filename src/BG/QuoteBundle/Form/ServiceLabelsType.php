<?php

namespace BG\QuoteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ServiceLabelsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
      ->add('isUsed', CheckboxType::class, [
        'label' => false,
        'disabled' => true
      ])
      ->add('level', TextType::class, [
        'label' => false,
        'disabled' => true
      ])
      ->add('drawing', TextType::class, [
        'label' => false,
        'disabled' => true
      ])
      ->add('labels', CollectionType::class, [
        'entry_type' => TextType::class,
        'required' => false,
        'empty_data' => '0',
        'label' => false
      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\QuoteBundle\Entity\Service',
            'label' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_quotebundle_service';
    }
}
