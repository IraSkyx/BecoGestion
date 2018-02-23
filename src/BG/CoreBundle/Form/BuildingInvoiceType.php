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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class BuildingInvoiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('num', HiddenType::class)
        ->add('services', CollectionType::class, [
          'entry_type' => ServiceInvoiceType::class,
          'label' => false
        ])
        ->add('specialServices', CollectionType::class, [
          'entry_type' => ServiceInvoiceType::class,
          'label' => false
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CoreBundle\Entity\Building',
            'label' => false
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
