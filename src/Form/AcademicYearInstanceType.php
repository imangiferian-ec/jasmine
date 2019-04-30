<?php

namespace App\Form;

use App\Entity\AcademicYearInstance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcademicYearInstanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('semesterStartDate')
            ->add('enrollmentStartDate')
            ->add('enrollmentEndDate')
            ->add('remarks')
            ->add('status')
            ->add('academicYear')
            ->add('semester')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AcademicYearInstance::class,
        ]);
    }
}
