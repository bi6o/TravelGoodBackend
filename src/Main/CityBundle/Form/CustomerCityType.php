<?php

namespace Main\CityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Main\MapBundle\Entity\Point;
use Main\MapBundle\Form\PointType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CustomerCityType extends AbstractType
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
                ->add('point', PointType::class)
                ->add('customer', EntityType::class, [
                    'class' => 'Main\BackendBundle\Entity\Customer',
                    'choice_label' => 'username',
                ])
                ->add('cityBrief')
                ->add('currentCity')
                ->add('visitedCity')
                ->add('livedCity')
                ->add('dateArrived')
                ->add('dateDeparted');
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
