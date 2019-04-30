<?php

namespace App\Form;

use App\Entity\EnrollmentDetails;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnrollmentDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('studentPicture')
            ->add('dateEnrolled')
            ->add('remarks')
            ->add('isBalikAral')
            ->add('isTransferee')
            ->add('isCrossEnrollee')
            ->add('isFullyPaid')
            ->add('isMedicallyCleared')
            ->add('isFinalalized')
            ->add('student')
            ->add('course')
            ->add('section')
            ->add('academicYear')
            ->add('semester')
            ->add('enrollingOfficer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EnrollmentDetails::class,
        ]);
    }
}
