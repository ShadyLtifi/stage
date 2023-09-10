<?php

namespace App\Form;

use App\Entity\EtudiantEsprit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom')
            ->add('prenom')
            ->add('idEtudiant')
            ->add('email')
            ->add('cin')
            ->add('date_naissance')
            ->add('moyenne1')
            ->add('moyenne2')
            ->add('moyenne3')
            ->add('niveauFR')
            ->add('niveauAn')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EtudiantEsprit::class,
        ]);
    }
}
