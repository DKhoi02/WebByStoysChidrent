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
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints as Assert;


class ShopManageType extends AbstractType{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Shop::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Email', TextType::class, [
                'label' => 'Email',
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('Telephone', TelType::class, [
                'label' => 'Telephone',
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('Address', TextType::class, [
                'label' => 'Address',
                'constraints' => [
                    new Assert\NotBlank()
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