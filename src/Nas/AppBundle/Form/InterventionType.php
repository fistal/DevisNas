<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InterventionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intervention', 'text', array( 
							'label'  => 'Intervention : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
            ->add('ghs', 'text', array( 
							'label'  => 'GHS : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
            ->add('dmi', 'text', array( 
							'label'  => 'DMI : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
            ->add('honoraires', 'text', array( 
							'label'  => 'Honoraires autres spécialités : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
			->add('nbrJours', 'text', array( 
							'label'  => 'Nombre de jours (cp)  : ',
							'required'  => false,
							'attr'   =>  array(
							'class'   => 'form-control')))
            ->add('total', 'text', array( 
							'label'  => 'Total : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
/* 			->add('specialite', 'entity', 
                array ('label' => 'Specialite',
                       'class' => 'NasAppBundle:Specialite', 
                       'property' => 'specialite',
                       'required' => false)) */
        ;
		$builder->remove('total');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nas\AppBundle\Entity\Intervention'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nas_appbundle_intervention';
    }
}
