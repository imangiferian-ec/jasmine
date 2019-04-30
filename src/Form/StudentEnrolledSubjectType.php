<?php

namespace App\Form;

use App\Entity\StudentEnrolledSubject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentEnrolledSubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateEnrolled')
            ->add('isAddedSubject')
            ->add('student')
            ->add('subjectOffering')
            ->add('enrollmentDetail')
            ->add('academicYearInstance')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudentEnrolledSubject::class,
        ]);
    }
}
