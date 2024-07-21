<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\User;
use App\Entity\VeterinaryReport;
use App\Repository\VeterinaryReportRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeterinaryReportType extends AbstractType
{
    private VeterinaryReportRepository $veterinaryReportRepository;

    public function __construct(VeterinaryReportRepository $veterinaryReportRepository)
    {
        $this->veterinaryReportRepository = $veterinaryReportRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $existingFoods = $options['existing_foods'];

        $builder
            ->add('health_status', TextType::class, [
                'required' => true,
                'label' => 'Etat de santé',
                'attr' => ['class' => 'form-control']
            ])
            ->add('existing_food', ChoiceType::class, [
                'label' => 'Nourriture existante',
                'choices' => $existingFoods,
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('food', TextType::class, [
                'label' => 'Nouvelle nourriture',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('food_weight', IntegerType::class, [
                'required' => true,
                'label' => '¨Poids de la nourriture',
                'attr' => ['class' => 'form-control']
            ])
            ->add('report_date', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date du rapport',
                'attr' => ['class' => 'form-control']
            ])
            ->add('detail', TextType::class, [
                'required' => true,
                'label' => 'Détails',
                'attr' => ['class' => 'form-control']
            ])
            ->add('animal_id', EntityType::class, [
                'class' => Animal::class,
                'choice_label' => 'name',
                'required' => true,
                'label' => 'Animal',
                'attr' => ['class' => 'form-control']
            ])
            ->add('user_id', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'required' => true,
                'label' => 'Utilisateur',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VeterinaryReport::class,
            'existing_foods' => [
                'Christian' => 'Christian',
                'Nathan' => 'Nathan',
                'Thomas' => 'Thomas',
                'Anthony' => 'Anthony',
                'Enfant' => 'Enfant',
                'Vache' => 'Vache',
                'Mouton' => 'Mouton',
                'Chevre' => 'Chevre',
            ]
        ]);
    }
}
