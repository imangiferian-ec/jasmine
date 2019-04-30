<?php

namespace App\Form;

use App\Entity\CurriculumSubjectEquivalence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CurriculumSubjectEquivalenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subjectEquivalence')
            ->add('curriculumSubject')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CurriculumSubjectEquivalence::class,
        ]);
    }
}
