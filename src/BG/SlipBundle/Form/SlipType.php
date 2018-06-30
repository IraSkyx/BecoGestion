<?php

namespace BG\SlipBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BG\CustomerBundle\Entity\Representative;
use BG\CustomerBundle\Repository\RepresentativeRepository;

class SlipType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('followedBy', ChoiceType::class, [
          'choices'  => [
              'Nicolas Lenoir' => 'Nicolas Lenoir',
              'Yves Kremer' => 'Yves Kremer',
              'Claude Roméro' => 'Claude Roméro',
          ]
        ])
        ->add('representatives', EntityType::class, [
          'class' => Representative::class,
          'multiple' => true,
          'expanded' => true,
          'query_builder' => function(RepresentativeRepository $er) {
            return $er->createQueryBuilder('u')
                      ->where('u.isBase = 1');
            },
        ])
        ->add('save', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BG\SlipBundle\Entity\Slip'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bg_slipbundle_slip';
    }
}
