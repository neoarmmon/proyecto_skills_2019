<?php

namespace App\Form;

use App\Entity\Genero;
use App\Entity\Juegos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JuegosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('votos_positivos')
            ->add('votos_negativos')
            ->add('imagen')
            ->add('genero', EntityType::class, [
                'class' => Genero::class,
'choice_label' => 'nombre',
'multiple' => true,
'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Juegos::class,
        ]);
    }
}
