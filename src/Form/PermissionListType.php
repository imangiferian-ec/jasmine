<?php

namespace App\Form;

use App\Entity\PermissionList;
use App\Entity\Role;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PermissionListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $role = new Role();
        $builder
            ->add('functionName')
            ->add('route')
            ->add('label')
            ->add('permittedRoles', EntityType::class,
                  array('class'=>'App\Entity\Role',
                'multiple'=>true,
                'expanded'=>true,
                'choice_value' => 'name',
              ))
            // ->add('permittedRoles', EntityType::class,
            //       array('class'=>'App\Entity\Role',
            //     'multiple'=>true,
            //     'expanded'=>true,
            //     'choice_value' => 'name',
            //   ))

            ->add('position')
            ->add('isActive')
            ->add('isSideMenu')
            ->add('module')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PermissionList::class,
        ]);
    }
}
