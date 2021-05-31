<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('reference',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('designation',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('couleur',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('prix',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('quantite',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('description',null,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
            ->add('Image',FileType::class,['attr'=> ['class'=>'col-lg-12 form-control','style'=>'margin-bottom:10px;']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
