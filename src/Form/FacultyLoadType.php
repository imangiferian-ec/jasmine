<?php

namespace App\Form;

use App\Entity\FacultyLoad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FacultyLoadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('isGradeSubmitted')
            ->add('gradeSaveAt')
            ->add('gradeSubmittedAt')
            ->add('gradeUpdatedAt')
            ->add('isGradeFinalized')
            ->add('dateGradeFinalized')
            ->add('gradeFinalizedAt')
            ->add('employee')
            ->add('subjectOfferring')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FacultyLoad::class,
        ]);
    }
}
