<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email as EmailConstraint;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $commonConstraints = [
            new NotBlank(['message' => 'Ce champ est obligatoire.']),
            new Length(['max' => 254, 'maxMessage' => 'Maximum 254 caractères.'])
        ];

        $builder
            ->add('nom', TextType::class, ['constraints' => $commonConstraints])
            ->add('prenom', TextType::class, ['constraints' => $commonConstraints])
            ->add('vousEtes', ChoiceType::class, [
                'choices' => [
                    'Société ou Institution' => 'societe',
                    'Recruteur' => 'recruteur',
                    'Journaliste' => 'journaliste',
                    'Partenaire' => 'partenaire',
                    'Demandeur d\'emploi' => 'demandeur',
                ],
                'placeholder' => 'Sélectionnez'
            ])
            ->add('nomSociete', TextType::class, [
                'required' => false, 'constraints' => [new Length(['max' => 254])]
            ])
            ->add('media', TextType::class, [
                'required' => false, 'constraints' => [new Length(['max' => 254])]
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(), new EmailConstraint(), new Length(['max' => 254])
                ]
            ])
            ->add('message', TextareaType::class, [
                'constraints' => [
                    new NotBlank(), new Length(['max' => 1000])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }

}
