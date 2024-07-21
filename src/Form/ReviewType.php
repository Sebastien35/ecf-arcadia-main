<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo', TextType::class, [
                'label' => 'Pseudo',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le pseudo est obligatoire']),
                ],
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'Avis',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le commentaire est obligatoire']),
                ],
            ])
            ->add('rating', IntegerType::class, [
                'label' => 'Note',
                'constraints' => [
                    new NotBlank(['message' => 'La note est obligatoire']),
                    new Range(['min' => 1, 'max' => 5, 'notInRangeMessage' => 'La note doit être entre 1 et 5']),
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
