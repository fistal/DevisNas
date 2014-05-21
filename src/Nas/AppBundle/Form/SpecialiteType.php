<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SpecialiteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('specialite', 'text')
			->add('interventions', 'collection', array('type' => new InterventionType(),
													'allow_add' =>true,
													'allow_delete' =>true))													
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nas\AppBundle\Entity\Specialite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nas_appbundle_specialite';
    }
}
