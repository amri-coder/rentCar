<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', TextType::class, ['label' => 'Nom : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('firstName', TextType::class, ['label' => 'Prénom : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('birthDate', BirthdayType::class, ['label' => 'Date de naissance : ', 'placeholder' => ['day' => 'Jour', 'month' => 'Mois', 'year' => 'Année'], 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('phoneNumber', TextType::class, ['label' => 'Téléphone : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('email', TextType::class, ['label' => 'E-mail : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('adress', TextType::class, ['label' => 'Adresse : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('city', TextType::class, ['label' => 'Ville : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('zipCode', TextType::class, ['label' => 'Code postale : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])
            ->add('country', TextType::class, ['label' => 'Pays : ', 'label_attr' => ['class' => 'form-label'], 'attr' => ['class' => 'form-control']])


            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
