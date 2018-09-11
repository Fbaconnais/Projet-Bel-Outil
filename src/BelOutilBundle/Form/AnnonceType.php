<?php
namespace BelOutilBundle\Form;
class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', NULL, ['label' => 'Titre'])
            ->add('text',
                TextareaType::class,
                [
                    'attr' => ['style' => 'height:150px;'],
                    'label'=> 'Description'
                ])
            ->add('datePublish', DateType::class,[
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'label' => 'Date de publication',
                'attr' => ['class' => 'js-datepicker form-control'],
            ])
            ->add('user', EntityType::class, [
                'label' => 'Auteur',
                'class' => 'Blog\FrontBundle\Entity\User',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.lastname', 'ASC');
                },
                'placeholder' => 'Choisissez un auteur',
                'choice_label' => function ($user) {
                    return $user->getName();
                }
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\FrontBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blog_frontbundle_post';
    }


}
