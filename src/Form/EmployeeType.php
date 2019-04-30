<?php

namespace App\Form;

use App\Entity\Employee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('employeeNo')
            ->add('employeeImage')
            ->add('titlePrefix')
            ->add('lastName')
            ->add('firstName')
            ->add('middleName')
            ->add('extensionName')
            ->add('titleSuffix')
            ->add('address')
            ->add('email')
            ->add('contactNo')
            ->add('gender')
            ->add('birthDate')
            ->add('birthPlace')
            ->add('civilStatus')
            ->add('maidenName')
            ->add('height')
            ->add('weight')
            ->add('religion')
            ->add('dateEmployed')
            ->add('status')
            ->add('isFaculty')
            ->add('department')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}
