<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('password',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('isVerified',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('firstname',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('lastname',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('adress',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('mobileNumber',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
