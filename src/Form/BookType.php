<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'constraints' => [
                    new Length([
                        'max' => 255
                    ])
                ],
                'label' => 'Название',
                'attr' => [
                    'class' => 'validate'
                ]
            ])
            ->add('author', null, [
                'constraints' => [
                    new Length([
                        'max' => 255
                    ])
                ],
                'label' => 'Автор',
                'attr' => [
                    'class' => 'validate'
                ]
            ])
            ->add('bookPhotoName')
            ->add('bookFileName')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
