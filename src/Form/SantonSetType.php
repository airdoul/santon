<?php

namespace App\Form;

use App\DTO\SantonSetDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SantonSetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('nom', TextType::class)
        ->add('description', TextareaType::class)
        ->add('photo', FileType::class, [
            'required' => false,
            'mapped' => false, 
        ])
        ->add('prix', NumberType::class)
        ->add('santonIds', ChoiceType::class, [
            'multiple' => true,
            'expanded' => true,
            'choices' => $options['santons'],
            'choice_label' => 'nom',
            'choice_value' => 'id',
        ])
        ->add('regionIds', ChoiceType::class, [
            'multiple' => true,
            'expanded' => true,
            'choices' => $options['regions'],
            'choice_label' => 'nom',
            'choice_value' => 'id',
        ])
        ->add('theme', TextType::class, [
            'required' => false,
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SantonSetDTO::class,
            'santons' => [],
            'regions' => [],
        ]);
    }
}