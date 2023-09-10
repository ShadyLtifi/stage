<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class Candidature2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Opportinute')
            ->add('EtudiantEsprit')
            ->add('resultat', ChoiceType::class, [
                'choices' => [
                    'EnCoursDExecution' => 'EnCoursDExecution',
                    'Accepter' => 'accepter',
                    'Refuser' => 'refuser',
                ],
                'label' => 'resultat',
                'attr' => ['class' => 'form-control'],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
