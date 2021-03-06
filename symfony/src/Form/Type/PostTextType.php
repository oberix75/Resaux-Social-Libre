<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\Entity\PostText;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class PostTextType
 */
class PostTextType extends AbstractType
{

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'form.field.title',
                ],
                'label' => false,
            ])
            ->add('content', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'form.field.content',
                ],
                'label' => false,
            ])
        ;
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PostText::class,
        ]);
    }

}
