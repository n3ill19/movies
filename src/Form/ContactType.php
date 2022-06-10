<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           # ->add('fullName',TextType::class, [
           #    'label' => 'Imię Nazwisko',
           # ])

            ->add('fullName', TextType::class, [
                'label' => false,
                'attr' => [
                    'autocomplete' => 'Imię Nazwisko',                     
                    'class' => 'bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none',
                    'placeholder' => 'Imię Nazwisko'
                ],
            ])

            #->add('email',EmailType::class, [
            #    'label' => 'E-mail'
           # ])

            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'autocomplete' => 'E-mail',                     
                    'class' => 'bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none',
                    'placeholder' => 'E-mail'
                ],
            ])

            ->add('message', TextareaType::class, [
                'label' => false,
                'attr' => [     
                    'class' => 'bg-transparent block mt-10 mx-auto border-b-2 w-1/5 h-20 text-2xl outline-none',
                    'placeholder' => 'Treść wiadomości',
                    'rows' => 5
                ],
            ])

            #->add('message', TextareaType::class, [
            #    'attr' => ['rows' => 5],
            #])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}