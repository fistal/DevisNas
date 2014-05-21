<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\AppBundle\Entity\Specialite;
use Nas\AppBundle\Entity\Honoraire;
use Nas\AppBundle\Form\SpecialiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class SpecialiteController extends Controller
{
/**
* @Security("has_role('ROLE_SUPER_ADMIN')")
*/
	public function indexAction()
	{
		return $this->render('NasAppBundle:Specialite:index.html.twig');
	}
	public function voirAction($id)
	{
		//déclaration repository pour rechercher dans la BDD
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('NasAppBundle:Specialite');
		
		$repSpecialite = $repository->find($id);
		
		return $this->render('NasAppBundle:Specialite:voir.html.twig', array('listeSpecialite'=>$repSpecialite));
	}
	public function listAction()
	{
		//déclaration repository pour rechercher dans la BDD
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('NasAppBundle:Specialite');
		
		$repSpecialite = $repository->findAll();
		
//		return new Response("Affichage de la specialité : ".$repSpecialite->getSpecialite());
		return $this->render('NasAppBundle:Specialite:voir.html.twig', array('listeSpecialite'=>$repSpecialite));
	}	
	public function ajouterAction()
	{
		if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) 
		{
			// Sinon on déclenche une exception « Accès interdit »
			throw new AccessDeniedHttpException('Accès limité aux auteurs');
		}
		
		$specialite = new Specialite();

		$form = $this->createForm(new SpecialiteType, $specialite);
		
		$request = $this->get('request');
		
		//si la requete est de type POST
		if($request->getMethod() == 'POST')
		{	
			//lien requete <=> formulaire
			$form->bind($request);
			
			if($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($specialite);
				//print_r($specialite);
				$em->flush();			
				//recalcul de l'ensemble des pourcentage sur le devis en comptabilisant la dernière entrée	
				$totalHonoraireArray = $em->getRepository('NasAppBundle:Honoraire')->totalHonoraire($specialite->getId());
				$totalHonoraire = $totalHonoraireArray[0][1];											
				
				$listeHonoraire = $em->getRepository('NasAppBundle:Honoraire')->findBySpecialite($specialite);
				
				foreach($listeHonoraire as $unHonoraire)
				{					
					
					$unHonoraire->setPourcentageDevis($unHonoraire->getPourcentageFacture()*100/$totalHonoraire);		
					$em->persist($unHonoraire);
				}			
				$em->flush();
				//print_r($totalHonoraire);
				//var_dump($totalHonoraire);
				//die();
				//$this->getLogger()->debug($totalHonoraire);
				//return $this->redirect($this->generateUrl('nasApp_listeSpecialite'));
				return $this->redirect($this->generateUrl('nasApp_detailSpecialite', array('idSpecialite'=> $specialite->getId())));
			}
		}
		
		return $this->render('NasAppBundle:Specialite:ajouter.html.twig', array('form'=>$form->createView()));
	}
	public function modifierAction()
	{
	
	}	
	public function detailAction($idSpecialite)
	{
		$repIntervention = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Intervention');
		$interventions = $repIntervention->findBySpecialite($idSpecialite);
		
		$repHonoraire = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Honoraire');
		$honoraires = $repHonoraire->findBySpecialite($idSpecialite);
		
		$repSpecialite = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite');
		$spe = $repSpecialite->find($idSpecialite);
		
		return $this->render('NasAppBundle:Specialite:detail.html.twig', array('listeIntervention'=>$interventions, 'specialite'=>$spe));
	}
}


