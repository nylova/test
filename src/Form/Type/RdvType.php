<?php


namespace App\Form\Type;


use App\entity\Docteur;
use App\Entity\Patient;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;

class RdvType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('patient',EntityType::class,[
            'class'=>Patient::class,
                'constraints'=>[
                    new NotNull(),
                ],
        ])
            ->add('docteur',EntityType::class,[
                'class'=>Docteur::class,
                'multiple'=>true,
                'constraints'=>[
                    new NotNull(),
                ],
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