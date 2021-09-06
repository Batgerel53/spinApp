<?php

namespace App\Form;

use App\Entity\Tohirol;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TohirolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name',      TextType::class, ['label'=>'Тохиролын нэр'])
            ->add('quantity' , NumberType::class, ['label'=>'Тоо ширхэг'], [ 'empty_data' => 'Тоо ширхэг оруулна уу',])
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
