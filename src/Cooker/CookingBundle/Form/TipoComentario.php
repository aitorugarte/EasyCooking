<?php

namespace Cooker\CookingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TipoComentario extends AbstractType
{
    /**
     * {@inheritdoc}
     */
  public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('usuario', null, array('label' => 'Usuario '))
        ->add('comentario', null, array('label' => 'Comentario '))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cooker\CookingBundle\Entity\Comentario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cooker_cookingbundle_comentario';
    }


}
