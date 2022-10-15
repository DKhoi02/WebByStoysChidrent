<?php

namespace App\Form;

use App\Entity\Brand;
use App\Entity\Product;
use App\Entity\Shop;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;


class AddProManageType extends AbstractType{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Product::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Productname', TextType::class, [
                'label' => 'Product Name'
            ])
            ->add('price', IntegerType::class, [
                'constraints' => [new Positive()],
                'attr' => [
                'min' => 0
                ],
                'label' => "Buy Price"
            ])
            ->add('CostPrice', IntegerType::class, [
                'constraints' => [new Positive()],
                'attr' => [
                'min' => 0
                ]
            ])
            ->add('Productdes',  TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
                'label' => 'Product Description'
            ])
            ->add('Productdate', DateType::class,[
                'widget' => 'single_text',
                'label' => 'Product Date'
            ])
            ->add('Productquantity', NumberType::class, [
                'label' => 'Product Quantity'
            ])
            ->add('Productimage', FileType::class, [
                'label' => 'Product Image',
                'data_class'=>null
                ])
            ->add('Brandid', EntityType::class, [
                'class' =>Brand::class,
                'choice_label' =>'Brandname',
                'label' => 'Brand'
            ])
            ->add('shop', EntityType::class, [
                'class' =>Shop::class,
                'choice_label' =>'Address',
                'label' => 'Shop'
            ])
            ->add('Status', ChoiceType::class, 
            [
                'choices' => [
                    'Available' => '1',
                    'Unavailable' => '0',
                ],
                'expanded' => true,
                'attr' => [
                    'style' => "accent-color: rgb(255,105,180);"
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => "Save",
                'attr' => [
                    'class' => "btn text-light",
                    'style' => "background-color: rgb(255,105,180);"
                 ]
            ]);
    }
}

?>