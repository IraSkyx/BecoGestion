<?php

namespace BG\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;

class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('building', IntegerType::class)
                ->add('engTime', NumberType::class)
                ->add('drawTime', NumberType::class)
                /*->add('plan', Select2EntityType::class, [
                  'multiple' => false,
                  'remote_route' => 'BG_CoreBundle_getplans',
                  'class' => '\BG\CoreBundle\Entity\Plan',
                  'minimum_input_length' => 0,
                  'allow_clear' => true,
                  'page_limit' => 10,
                  'placeholder' => 'Choisir un plan',
                ]);*/
                ->add('plan');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\CoreBundle\Entity\Service',
            'label'=> false,
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
