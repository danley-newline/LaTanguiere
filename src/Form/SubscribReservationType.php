<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class SubscribReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',)
            ->add('prenom')
            ->add('email', EmailType::class)
            ->add('telephone')
            ->add('adresse')
            ->add('ville')
            ->add('code_postal')
            ->add('date_debut' ,BirthdayType::class, [
                'widget' => 'single_text'
            ])
            ->add('date_fin',BirthdayType::class, [
                'widget' => 'single_text'
            ])
            ->add('carte_nom_prenom')
            ->add('carte_adresse')
            ->add('carte_ville')
            ->add('carte_codepostal')
            ->add('carte_pays')
            ->add('carte_telephone')
            ->add('carte_numero')
            ->add('carte_proprio')
            ->add('carte_date_fin')
            ->add('carte_cw')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
