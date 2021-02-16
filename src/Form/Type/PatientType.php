<?php


namespace App\Form\Type;


use App\Entity\patient;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotNull;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomPatient',TextType::class,[
            'constraints'=>[
                new NotNull(),
            ]
        ])
            ->add('prenomPatient',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('genre',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('dateDeNaissance',DateType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('adresse',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('email',EmailType::class,[
                'constraints'=>[
                    new NotNull(),
                    new Email(),
                ]
            ])
            ->add('phone',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('status',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('commentaire',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])

        ;



    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault([
            'data_class'=> patient::class,
        ]);
    }

}