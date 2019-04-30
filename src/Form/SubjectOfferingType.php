<?php

namespace App\Form;

use App\Entity\SubjectOffering;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectOfferingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('labday')
            ->add('labdayTime')
            ->add('lectureDay')
            ->add('lectureDayTime')
            ->add('allowedNoStudent')
            ->add('status')
            ->add('employee')
            ->add('academicYearInstance')
            ->add('course')
            ->add('section')
            ->add('curriculumSubject')
            ->add('room')
            ->add('gradeSubmittedBy')
            ->add('gradeFinalizedBy')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubjectOffering::class,
        ]);
    }
}
