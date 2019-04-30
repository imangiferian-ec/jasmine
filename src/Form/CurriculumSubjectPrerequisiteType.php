<?php

namespace App\Form;

use App\Entity\CurriculumSubjectPrerequisite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CurriculumSubjectPrerequisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subjectPrerequisite')
            ->add('remarks')
            ->add('curriculumSubject')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CurriculumSubjectPrerequisite::class,
        ]);
    }
}
