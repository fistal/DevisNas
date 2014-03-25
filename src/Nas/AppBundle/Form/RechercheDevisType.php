<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheDevisType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPatient', 'text', array('required' => false))
			->add('prenomPatient', 'text', array('required' => false))
			->add('intervention', 'text', array('required' => false))													
			->add('dateDu', 'datetime',array('required' => false,
                                                      'widget' =>'single_text',
                                                      'format' =>'dd/MM/yyyy'))
			->add('dateAu', 'datetime',array('required' => false,
                                                      'widget' =>'single_text',
                                                      'format' =>'dd/MM/yyyy'))	;													  
/* 			->add('date', 'datetime',array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                ))	;	 */											
        ;
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'nas_appbundle_rechercheDevis';
    }
}
