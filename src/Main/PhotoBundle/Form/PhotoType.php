<?php

namespace Main\PhotoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PhotoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('photoTitle', TextType::class)
        ->add('photoUrl', TextType::class)
        ->add('photoType', ChoiceType::class, [
            'choices' => [
                'profilePicture' => 'Profile Picture',
                'cityPicture' => 'city Picutre',
            ],
        ])
        ->add('dateUploaded', DateTimeType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\PhotoBundle\Entity\Photo',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_backendbundle_customer_info';
    }
}
