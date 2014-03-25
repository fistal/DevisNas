<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtractionDevisType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateur', 'entity', array('class'=>'NasUserBundle:User', 'property'=>'username', 'empty_value'=>'Tout', 'required'=>false))
			//->add('utilisateur', 'entity', array('class' => 'HurricaneScriptAnnonceBundle:Marque', 'property' => 'nom', 'empty_value' => 'Tout', 'required' => false))
			->add('specialite', 'entity', array('class'=>'NasAppBundle:Specialite', 'property'=>'specialite', 'empty_value'=>'Tout', 'required'=>false))
			
			
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
        return 'nas_appbundle_extractionDevis';
    }
}
