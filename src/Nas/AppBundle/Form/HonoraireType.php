<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HonoraireType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	
	$builder
            ->add('type', 'text', array( 
							'label'  => 'Type d\'honoraire : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
            ->add('pourcentageFacture', 'text', array( 
							'label'  => 'Pourcentage de l\'honoraire : ',
							'attr'   =>  array(
							'class'   => 'form-control')))
			;
	
/*         $builder
            ->add('type', 'text')
            ->add('pourcentageFacture', 'text')
			->add('specialite', 'entity', 
                array ('label' => 'Specialite',
                       'class' => 'NasAppBundle:Specialite', 
                       'property' => 'specialite'))
        ; */
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nas\AppBundle\Entity\Honoraire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nas_appbundle_honoraire';
    }
}
