<?php

namespace App\Form;

use App\Entity\StudentProfilingDetails;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentProfilingDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateProfiled')
            ->add('remarks')
            ->add('status')
            ->add('student')
            ->add('course')
            ->add('curriculum')
            ->add('academicYearInstance')
            ->add('profiler')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudentProfilingDetails::class,
        ]);
    }
}
