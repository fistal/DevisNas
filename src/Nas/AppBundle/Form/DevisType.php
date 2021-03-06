<?php

namespace Nas\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DevisType extends AbstractType
{
	private $idSpecialite;
	
	public function __construct($idSpe)
	{
		$this->idSpecialite = $idSpe;
	}

	/**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//$idSpecialite = $options['idSpecialite'];
		$id = $this->idSpecialite;
		
        $builder
            ->add('chambre', 'checkbox', array('required' => false,))
            //->add('nbrJours', 'number', array('required' => false, 'read_only' => true))
            ->add('nbrJoursSupp', 'number', array('required' => false))
			->add('accompagnant', 'checkbox', array('required' => false,))			
			->add('honorairesPraticien', 'text', array('required' => true,))			
			->add('honorairesAnesthesiste', 'text', array('required' => true,))			
            ->add('date')
			->add('clinique', 'choice', array(
				'choices'=> array('Ambroise Paré'=>'Ambroise Paré','Pierre Cherest'=>'Pierre Cherest', 'Hartmann'=>'Hartmann'),
				'empty_value' => 'Choisissez un établissement',
				'required'=> true))
            ->add('patient', new PatientType())
			->add('intervention', 'entity', array(
				'class' => 'NasAppBundle:Intervention',
				'property' => 'intervention',
				'empty_value' => 'Choisissez une option',
				'query_builder' =>
				function(\Nas\AppBundle\Entity\InterventionRepository $r) use($id) {
					return $r->getSelectList($id);
				}))
			->remove('date') ;
			
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nas\AppBundle\Entity\Devis'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nas_appbundle_devis';
    }
}
