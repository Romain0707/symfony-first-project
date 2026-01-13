<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                'label' => 'Nom:',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email:',
            ])
            ->add('choice', ChoiceType::class, [
                'label' => 'Choisissez un Sujet:',
                'choices' => [
                    'Sélectionnez un sujet' => null,
                    'Mathématiques' => 'maths',
                    'Science' => 'science',
                    'Littérature' => 'litterature'
                ]
            ])
            ->add('sujet', TextType::class,[
                'label' => 'Sujet:',
            ])
            ->add('message', TextareaType::class,[
                'label' => 'Message:',
            ])
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
