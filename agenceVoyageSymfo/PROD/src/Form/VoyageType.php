<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Destination;
use App\Entity\Voyage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_voyage')
            ->add('destination', EntityType::class, [
                'class' => Destination::class,
                'choice_label' => 'pays',
                'multiple' => true
            ])
            ->add('photo_voyage')
            ->add('duree_voyage')
            ->add('dateDepart_voyage', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('dateRetour_voyage', null, [
                'widget' => 'single_text'
            ])
            ->add('description_voyage')
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom_categorie',
                'multiple' => true,
            'expanded' => true,

            ])

            ->add('prix_voyage');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
