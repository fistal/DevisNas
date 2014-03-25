<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\AppBundle\Entity\Intervention;
use Nas\AppBundle\Entity\Specialite;
use Nas\AppBundle\Form\InterventionType;
use Nas\AppBundle\Form\InterventionEditType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
//use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
* @Security("has_role('ROLE_SUPER_ADMIN')")
*/
class InterventionController extends Controller
{

	public function indexAction()
	{
		//return $this->render('NasAppBundle:Specialite:index.html.twig');
	}
	public function voirAction($idSpecialite)
	{
		$em = $this->getDoctrine()
					->getManager();
		
		$spe = $em->getRepository('NasAppBundle:Specialite')->find($idSpecialite);									
		
		$listInter = $em->getRepository('NasAppBundle:Intervention')->findBySpecialite($idSpecialite);

		//return new Response("Affichage de la specialité : ".$id);
		return $this->render("NasAppBundle:Intervention:index.html.twig", array('uneSpe'=>$spe, 'liste_intervention'=>$listInter));
	}
	public function ajouterAction($idSpecialite)
	{
		$specialite = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite')->find($idSpecialite);
		$intervention = new Intervention();
			
		$form = $this->createForm(new InterventionType, $intervention);
			
		$request = $this->get('request');
		
		// Si la requete est de type POST
		if($request->getMethod() == 'POST')
		{	
			// Lien requete <=> formulaire
			$form->bind($request);
			
			if($form->isValid())
			{
/* 				//création d'un objet intervention pour récupèrer uniquement les propriétés de intervention
				$inter = new Intervention();
				$inter->setIntervention($intervention->getIntervention());
				$inter->setGhs($intervention->getGhs());
				$inter->setDmi($intervention->getDmi());
				$inter->setHonoraires($intervention->getHonoraires());
				$inter->setDontSpecialiste($intervention->getDontSpecialiste());	
				//$inter->setTotal($inter->setGhs()+$inter->setDmi()+$inter->setHonoraires());	

				//liaison de l'intervention à la spécialité
				$inter->setSpecialite($intervention->getSpecialite()); */
				
				$intervention->setSpecialite($specialite);			
				$em = $this->getDoctrine()->getManager();
				
				//je récupère mon objet specialité via l'objet intervention
				//$em->persist($intervention->getSpecialite());
				$em->persist($intervention);
				$em->flush();
				
				return $this->redirect($this->generateUrl('nasApp_detailSpecialite', array('idSpecialite'=>$intervention->getSpecialite()->getId())));  
				//return $this->redirect($this->generateUrl('nasApp_voirIntervention', array('idSpecialite'=>$intervention->getSpecialite()->getId())));  
			}
		}
		
		return $this->render('NasAppBundle:Intervention:ajouter.html.twig', array('form'=>$form->createView(), 'specialite'=>$specialite));
	}
	
	public function modifierAction(Intervention $intervention)
	{
		//print_r($intervention->getSpecialite()->getId());
		$form = $this->createForm(new InterventionEditType(), $intervention );
		
		$request = $this->getRequest();
		
		if($request->getMethod() == "POST")
		{

			$form->bind($request);
			
			if($form->isValid())
			{			
				$em = $this->getDoctrine()->getManager();
				$em->persist($intervention);
				$em->flush();
				
				return $this->redirect($this->generateUrl('nasApp_detailSpecialite',array('idSpecialite'=>$intervention->getSpecialite()->getId())));
			}
			else
			{
				var_dump($form->getErrorsAsString());
				die;
				//print_r('ta race');
			}
			//$this->getLogger()->debug($totalHonoraire);
		}
		
		$repSpe = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite');
		$specialite = $repSpe->find($intervention->getSpecialite()->getId());
		return $this->render('NasAppBundle:Intervention:modifier.html.twig', array('form'=>$form->createView(), 'intervention'=>$intervention, 'maSpecialite' =>$specialite->getSpecialite()));
	}
	public function supprimerAction(Intervention $intervention)
	{
		
	}
}


