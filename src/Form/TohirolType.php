<?php

namespace App\Form;

use App\Entity\Tohirol;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TohirolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        


        $builder
            ->add('name')
            ->add('quantity')


            // ->add('chance')
        
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tohirol::class,
        ]);
    }
}
