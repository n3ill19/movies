<?php

namespace App\Form;

use App\Entity\Movie;
use DateTime;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-2xl outline-none',
                    'placeholder' => 'Podaj tytuł filmu...',
                ),
                'label' => false,
                'required' => false
            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-2xl outline-none',
                    'placeholder' => 'Podaj datę filmu...'
                ),
                'label' => false,
                'required' => false
            ])
            //DODANIE DATY
            ->add('dateCreate', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-2xl outline-none',
                    'placeholder' => 'Podaj datę utworzenia postu dla formatu: dd.mm.rrrr hh:mm'
                ),
                'label' => false,
                'required' => false
            ])
            ->add('description', TextareaType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-2xl outline-none',
                    'placeholder' => 'Twoja recenzja...'
                
                ),
                'label' => false,
                'required' => false,
            ])
            ->add('imagePath', FileType::class, array(
                'required' => false,
                'mapped' => false
            )) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
