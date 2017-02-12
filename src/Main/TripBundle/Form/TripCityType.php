<?php

namespace Main\TripBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Main\CityBundle\Form\CustomerCityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TripCityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('City', EntityType::class, [
			'class' => 'Main\CityBundle\Entity\CustomerCity',
			'choice_label' => 'city.city',
		])
				->add('Segment')
				->add('City' , CustomerCityType::class)
				->add('cityOrder' , IntegerType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\TripBundle\Entity\TripCity'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_tripbundle_tripcity';
    }


}
