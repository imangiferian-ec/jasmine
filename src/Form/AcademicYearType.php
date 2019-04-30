<?php

namespace App\Form;

use App\Entity\AcademicYear;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcademicYearType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ayStartYear')
            ->add('ayEndYear')
            ->add('status')
            ->add('isAcceptingExaminee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AcademicYear::class,
        ]);
    }
}
