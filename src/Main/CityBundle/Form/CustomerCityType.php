<?php

namespace Main\CityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Main\MapBundle\Entity\Point;
use Main\MapBundle\Form\PointType;

class CustomerCityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('point', PointType::class)
                ->add('cityBrief')
                ->add('currentCity')
                ->add('visitedCity')
                ->add('livedCity')
                ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\CityBundle\Entity\CustomerCity',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_backend_admin_customer_city';
    }
}
