<?php

namespace App\Form;

use App\Entity\StudentExaminee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentExamineeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('examineeNo')
            ->add('examinationDate')
            ->add('venue')
            ->add('examinationTime')
            ->add('lastName')
            ->add('firstName')
            ->add('middleName')
            ->add('extentionName')
            ->add('gender')
            ->add('contactNo')
            ->add('birthDate')
            ->add('birthPlace')
            ->add('address')
            ->add('lastSchoolAttended')
            ->add('lastSchoolAddress')
            ->add('examinationScore')
            ->add('profilingStatus')
            ->add('student')
            ->add('firstCourse')
            ->add('secondCourse')
            ->add('academicYear')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudentExaminee::class,
        ]);
    }
}
