<?php

namespace App\Form;

use App\Entity\Subject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subjectCode')
            ->add('subjectTitle')
            ->add('description')
            ->add('units')
            ->add('lectureHour')
            ->add('labHour')
            ->add('isForHighschool')
            ->add('department')
            ->add('course')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Subject::class,
        ]);
    }
}
