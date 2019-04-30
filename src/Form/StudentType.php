<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('studentNo')
            ->add('lastName')
            ->add('firstName')
            ->add('middleName')
            ->add('extensionName')
            ->add('address')
            ->add('barangay')
            ->add('contactNo')
            ->add('email')
            ->add('gender')
            ->add('birthDate')
            ->add('birthPlace')
            ->add('civilStatus')
            ->add('religion')
            ->add('height')
            ->add('weight')
            ->add('yearProfiled')
            ->add('fatherName')
            ->add('fatherOccupation')
            ->add('motherName')
            ->add('motherOccupation')
            ->add('guadian')
            ->add('relationGuardian')
            ->add('guardianContactNo')
            ->add('maidenName')
            ->add('voter_id')
            ->add('personToNotify')
            ->add('status')
            ->add('academicYearInstance')
            ->add('studentExaminee')
            ->add('user')
            ->add('profiller')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
