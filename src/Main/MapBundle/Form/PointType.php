<?php

namespace Main\MapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Main\BackendBundle\Entity\Customer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PointType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('city', EntityType::class, [
                        'class' => 'Main\CityBundle\Entity\AllCities',
                        'choice_label' => 'city',
                    ])
                ->add('customer', EntityType::class, [
                    'class' => 'Main\BackendBundle\Entity\Customer',
                    'choice_label' => 'username',
                ])
                ->add('logitude')
                ->add('latitude')
                ->add('dateArrived')
                ->add('dateDeparted');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\MapBundle\Entity\Point',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_mapbundle_point';
    }
}
