<?php

namespace App\Form;

use App\Entity\AddedProfLoad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddedProfLoadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subjectOffering')
            ->add('professor')
            ->add('academicYear')
            ->add('semester')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddedProfLoad::class,
        ]);
    }
}
