<?php

namespace App\Form;

use App\Entity\Curriculum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CurriculumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('curriculumCode')
            ->add('title')
            ->add('status')
            ->add('isFinalized')
            ->add('academicYear')
            ->add('course')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Curriculum::class,
        ]);
    }
}
