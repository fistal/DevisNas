<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\AppBundle\Entity\Honoraire;
use Nas\AppBundle\Entity\Specialite;
use Nas\AppBundle\Form\HonoraireType;
use Nas\AppBundle\Form\HonoraireEditType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
* @Security("has_role('ROLE_SUPER_ADMIN')")
*/
class HonoraireController extends Controller
{
	public function indexAction()
	{
		//return $this->render('NasAppBundle:Specialite:index.html.twig');
	}
	
	public function voirAction($idSpecialite)
	{
		
	}
	
	public function ajouterAction($idSpecialite)
	{	
		$specialite = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite')->find($idSpecialite);
		$honoraire = new Honoraire();
		$formBuilder = $this->createFormBuilder($honoraire);
			
		$form = $this->createForm(new HonoraireType, $honoraire);
		
		$request = $this->get('request');
		
		// Si la requete est de type POST
		if($request->getMethod() == 'POST')
		{	
			// Lien requete <=> formulaire
			$form->bind($request);
			
			if($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				
				$honoraire->setSpecialite($specialite);
/* 				
				//création d'un objet intervention pour récupèrer uniquement les propriétés de intervention
				$hono = new Honoraire();
				$hono->setType($honoraire->getType());
				$hono->setPourcentageFacture($honoraire->getPourcentageFacture());
				//$hono->setPourcentageDevis($honoraire->getPourcentageDevis());
				
				//liaison de l'intervention à la spécialité
				$hono->setSpecialite($honoraire->getSpecialite()); */
				
				$em->persist($honoraire);
				$em->flush();
				
				
				//recalcul de l'ensemble des pourcentage sur le devis en comptabilisant la dernière entrée	
				$totalHonoraireArray = $em->getRepository('NasAppBundle:Honoraire')->totalHonoraire($idSpecialite);
				$totalHonoraire = $totalHonoraireArray[0][1];							
				
				$listeHonoraire = $em->getRepository('NasAppBundle:Honoraire')->findBySpecialite($honoraire->getSpecialite());
				
				foreach($listeHonoraire as $unHonoraire)
				{					
					
					$unHonoraire->setPourcentageDevis($unHonoraire->getPourcentageFacture()*100/$totalHonoraire);		
					$em->persist($unHonoraire);
				}			
				$em->flush();								
				
				return $this->redirect($this->generateUrl('nasApp_detailSpecialite', array('idSpecialite'=>$honoraire->getSpecialite()->getId())));  
			}
		}

		return $this->render('NasAppBundle:Honoraire:ajouter.html.twig', array('form'=>$form->createView(), 'specialite'=>$specialite));
	}
	
	public function modifierAction(Honoraire $honoraire)
	{
		$form = $this->createForm(new HonoraireEditType(), $honoraire);
		
		$request = $this->getRequest();
		
		if($request->getMethod() == "POST")
		{

			$form->bind($request);
			print_r($form->getErrors());
			if($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($honoraire);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('info', 'honoraire bien modifiés !!!');
				
				return $this->redirect($this->generateUrl('nasApp_detailSpecialite',array('idSpecialite'=>$honoraire->getSpecialite()->getId())));
			}
		}
		
		$repSpe = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite');
		$specialite = $repSpe->find($honoraire->getSpecialite()->getId());
		return $this->render('NasAppBundle:Honoraire:modifier.html.twig', array('form'=>$form->createView(), 'honoraire'=>$honoraire, 'specialite' =>$specialite));
	}
	
	public function supprimerAction(Intervention $intervention)
	{
		
	}
}


