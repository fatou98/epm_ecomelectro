<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('lastname',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('adress',TextareaType::class,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('mobileNumber',NumberType::class,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('email',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                    ],'attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
