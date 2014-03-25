<?php

namespace Nas\UserBundle\Form\Type;
 
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('roles', 'collection', array(
			   'type' => 'choice',
			   'options' => array(
			   'choices' => array(
				   'ROLE_ADMIN' => 'Administrateur',
				   'ROLE_SUPER_ADMIN' => 'Super administrateur',
				   'ROLE_USER' => 'Utilisateur'))))
				  ->add('specialite', 'entity', array(
					'class' => 'NasAppBundle:Specialite',
					'property' => 'specialite'));
    }

    public function getName()
    {
        return 'nas_user_registration';
    }
}