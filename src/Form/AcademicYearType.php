<?php

namespace App\Form;

use App\Entity\AcademicYear;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AcademicYearType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ayStartYear')
            ->add('ayEndYear')
            ->add('status', ChoiceType::class, [
                  'choices'  => [
                      'Active' => 'a',
                      'Inactive' => 'i',
                  ],
              ])
            ->add('isAcceptingExaminee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AcademicYear::class,
        ]);
    }
}
