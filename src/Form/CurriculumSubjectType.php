<?php

namespace App\Form;

use App\Entity\CurriculumSubject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CurriculumSubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('yearLevel')
            ->add('curriculum')
            ->add('semester')
            ->add('subject')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CurriculumSubject::class,
        ]);
    }
}
