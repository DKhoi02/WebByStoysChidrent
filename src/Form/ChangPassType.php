<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePassType extends AbstractType {
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password', RepeatedType::class,[
                'type' =>PasswordType::class,
                'invalid_message' => 'Not match',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password']
                
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