<?php

namespace App\Form;

use App\Entity\EtudiantEsprit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class EtudiantEspritType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('nom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('prenom',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('cin',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('date_naissance',DateType::class,)
            ->add('moyenne1',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('moyenne2',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('moyenne3',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('niveauFR',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('niveauAN',TextType::class,
            ['attr'=>['class'=>'form-control']])
            ->add('idEtudiant',TextType::class,
            ['attr'=>['class'=>'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EtudiantEsprit::class,
        ]);
    }
}
