<?php

namespace Main\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CustomerCityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cityName')
                ->add('dateArrived', DateTimeType::class
                //@todo: add bootstrap's DatePicker using the comments and adding the needed js file
                // , [
                //     'widget' => 'single_text', 'format' => 'dd-MM-yyyy',
                //     'attr' => [
                //        'class' => 'form-control input-inline datepicker',
                //        'data-provide' => 'datepicker',
                //        'data-date-format' => 'dd-mm-yyyy',
                //     ],
                // ]
                )
                ->add('dateDeparted')
                ->add('logitude')
                ->add('latitude')
                ->add('cityBreif')
                ->add('currentCity')
                ->add('visitedCity')
                ->add('livedCity')
                ->add('customer', EntityType::class, [
            'class' => 'Main\BackendBundle\Entity\Customer',
            'choice_label' => 'username',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\BackendBundle\Entity\CustomerCity',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_backendbundle_customercity';
    }
}
