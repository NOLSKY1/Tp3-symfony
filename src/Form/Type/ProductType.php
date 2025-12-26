<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantity' , NumberType::class , [
            'html5' => true ,
            'required' => false ,
            'attr' => [
            'min' => 1,
            'max' => 10 ,
            'step'=> 1,
            'style' => 'max-width: 100px;'
        ]
        ])
                ->add('color' , ChoiceType::class , [
                    'expanded' => false ,
                    'multiple' => false,
                    'label' => 'Select Color' ,
                    'attr' => [
                         'style' => 'max-width: 200px;',
                    ],
                    'required' => false,
                    'choices' => [
                        'Matte Black'=>'black',
                        'Pearl White'=>'white',
                        'Silver'=>'silver',
                    ],
                    'data' => 'black',
                ]);
    }
}
