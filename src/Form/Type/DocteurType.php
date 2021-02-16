<?php


namespace App\Form\Type;


use App\entity\Docteur;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;

class DocteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
            'constraints'=>[
                new NotNull(),
                new Length([
                    'max'=> 100,

                ])
            ]
        ])
            ->add('prenom',TextType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])
            ->add('status',TextType::class,[
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
            ->add('phone',IntegerType::class,[
                'constraints'=>[
                    new NotNull(),
                ]
            ])

        ;



    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault([
            'data_class'=> Docteur::class,
        ]);
    }

}