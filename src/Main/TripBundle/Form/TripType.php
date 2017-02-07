<?php

namespace Main\TripBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TripType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type' , ChoiceType::class, [
			'choices' => [
				'Hitchhicked' => 'Hitchhicked',
				'Roadtrip' => 'Roadtrip',
			],
		])
				->add('date' , DateTimeType::class)
				->add('comment')
				->add('customer', EntityType::class, [
					'class' => 'Main\BackendBundle\Entity\Customer',
					'choice_label' => 'username',
				])
				->add('tripCities', CollectionType::class, [
					'by_reference' => false,
					'allow_delete' => true,
					'entry_type' => 'Main\TripBundle\Form\TripCityType',
					'allow_add' => true,
				]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\TripBundle\Entity\Trip'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_tripbundle_trip';
    }


}
