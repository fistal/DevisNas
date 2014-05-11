<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\AppBundle\Entity\Devis;
use Nas\AppBundle\Entity\DevisHonoraire;
use Nas\AppBundle\Form\DevisType;
use Nas\AppBundle\Form\RechercheDevisType;
use Nas\AppBundle\Form\AnnuleDevisType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class DevisController extends Controller
{

	public function indexAction()
	{
		return $this->render('NasAppBundle:Devis:index.html.twig');
	}
	public function voirAction($idDevis)
	{
		$form = $this->createForm(new AnnuleDevisType());
		$request = $this->getRequest();
		
		$em = $this->getDoctrine()->getManager();
		
		$devis = $em->getRepository('NasAppBundle:Devis')->find($idDevis);
		$patient = $em->getRepository('NasAppBundle:Patient')->find($devis->getPatient());
		$specialite = $em->getRepository('NasAppBundle:Specialite')->find($devis->getSpecialite());
		$intervention = $em->getRepository('NasAppBundle:Intervention')->find($devis->getIntervention());
		
		$listeHonoraires = $em->getRepository('NasAppBundle:DevisHonoraire')->findByDevis($devis->getId());
		
		$totalFacture = $devis->getMntPartClinique();
		$totalFacture += $devis->getMntChambre();
		$honorairesAutres = 0;
		foreach($listeHonoraires as $i => $honoraire)
		{
			$honorairesAutres += $honoraire->getMnt();
			$totalFacture += $honoraire->getMnt();
		}
		
		if($devis->getNbrJoursSupp()!= "")
		{
			$honorairesAutres = $honorairesAutres*1.3;
			
		}
		
		if(!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
		{
			return $this->render('NasAppBundle:Devis:voir.html.twig', array('devis'=>$devis,
																		'patient'=>$patient,
																		'specialite'=>$specialite,
																		'intervention'=>$intervention,
																		'listeHonoraires'=>$listeHonoraires,
																		'totalFacture'=>$totalFacture,
																		'honorairesAutres'=>$honorairesAutres));
		}
		else
		{				

			return $this->render('NasAppBundle:Devis:voir.html.twig', array('devis'=>$devis,
																		'patient'=>$patient,
																		'specialite'=>$specialite,
																		'intervention'=>$intervention,
																		'listeHonoraires'=>$listeHonoraires,
																		'totalFacture'=>$totalFacture,
																		'form'=>$form->createView()));
		}
	
		
		//return $this->render('NasAppBundle:Devis:voir.html.twig', array('idDevis'=>$idDevis));

	}
	public function listAction()
	{
		$user = $this->getUser();
		
		$repository = $this->getDoctrine()
							->getManager()
							->getRepository('NasAppBundle:Devis');
		
		
		//init idUser si utilisateur != admin / superadmin
		if(!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
		{
			//$listeDevis = $repository->findByUser($user->getId());
			$listeDevis = $repository->findBy(array('user'=>$user->getId(), 'etat'=>'success' ));
		}
		else
		{
			//$listeDevis = $repository->findAll();
			$listeDevis = $repository->findAll(array(),array('etat' => 'asc'));
		}		
		
		return $this->render('NasAppBundle:Devis:liste.html.twig', array('listeDevis'=>$listeDevis));
	}	
	public function ajouterAction()
	{		
		$request = $this->get('request');
		
		$devis = new Devis();		
		$user = $this->getUser();
		
		//recuperer l'id specialite de l'utilisateur, pour charger la liste des interventions.
		$idSpe = $user->getSpecialite()->getId();
		$devis->setSpecialite($this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite')->find($idSpe));
	
		$form = $this->createForm(new DevisType($idSpe) , $devis);

		//si la requete est de type POST
		if($request->getMethod() == 'POST')
		{	
			//lien requete <=> formulaire
			$form->bind($request);						
			
			if($form->isValid())
			{
				$devis->setUser($user);				
				$devis->setEtat('success');
				//$intervention = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Intervention')->find($devis->getIntervention()->getId());								
				//print_r($devis->getIntervention()->getId());
				//NOMBRE DE JOURS PMSI
				$devis->setNbrJours($devis->getIntervention()->getNbrJours());							
				
				//CALCULER DU MONTANT CHAMBRE + MONTANT PART CLINIQUE--------------
				//Si chambre particulière 
				if($devis->getChambre() ==1)
				{
					$devis->setMntChambre(($devis->getNbrJours()+$devis->getNbrJoursSupp())*200);
					//$devis->setMntPartClinique($intervention->getGhs()*1.3);
					$devis->setMntPartClinique($devis->getIntervention()->getGhs()*1.3);
				}
				else
				{
					$devis->setMntChambre(0);	
					//$devis->setMntPartClinique($intervention->getGhs());
					$devis->setMntPartClinique($devis->getIntervention()->getGhs());
				}
				
				//CALCULER DE L'ACCOMPAGNANT--------------
				if($devis->getAccompagnant() ==1)
				{
					$devis->setMntAccompagnant(($devis->getNbrJours()+$devis->getNbrJoursSupp())*50);
				}
				else
				{
					$devis->setMntAccompagnant(0);	
				}			
				
				//ENREGISTRER LE DEVIS--------------
				$em = $this->getDoctrine()->getManager();
				$em->persist($devis);
				$em->flush();
				
				//ENREGISTRER LES HONORAIRES--------------
				//recuperer les honoraires
				$listeHonoraires = $em->getRepository('NasAppBundle:Honoraire')->findBySpecialite($devis->getSpecialite()->getId());
				print_r($devis->getSpecialite()->getId());
				
				foreach($listeHonoraires as $i => $honoraire)
				{
					$devisHonoraire[$i] = new DevisHonoraire();
					$devisHonoraire[$i]->setDevis($devis);
					$devisHonoraire[$i]->setHonoraire($honoraire);
					$devisHonoraire[$i]->setMnt($devis->getMntPartClinique() * $honoraire->getPourcentageDevis() / 100); //calcul du prix mntPartCLinique * %honoraire
					$em->persist($devisHonoraire[$i]);
				}
				$em->flush();
				
				return $this->redirect($this->generateUrl('nasApp_voirDevis', array('idDevis'=> $devis->getId())));
			}
		}
		
		return $this->render('NasAppBundle:Devis:ajouter.html.twig', array('form'=>$form->createView()));
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
		
		//return $this->render('NasAppBundle:Specialite:detail.html.twig', array('listeIntervention'=>$interventions, 'listeHonoraire'=>$honoraires, 'spe'=>$spe->getSpecialite()));
		//return ->get('templating')->render('NasAppBundle:Specialite:detail.html.twig', array('listeIntervention'=>$interventions, 'listeHonoraire'=>$honoraires, 'spe'=>$spe->getSpecialite()));
		
		$html = $this->renderView('NasAppBundle:Specialite:detail.html.twig', array('listeIntervention'=>$interventions, 'listeHonoraire'=>$honoraires, 'spe'=>$spe->getSpecialite()));
		 
		$html2pdf = new \HTML2PDF('P','A4','fr');
		$html2pdf->pdf->SetDisplayMode('real');
		$html2pdf->writeHTML($html, isset($_GET['vuehtml']));
		$fichier = $html2pdf->Output('Devis'.$spe->getId().'.pdf');
		 
		$response = new Response();
		$response->clearHttpHeaders();
		$response->setContent(file_get_contents($fichier));
		$response->headers->set('Content-Type', 'application/force-download');
		$response->headers->set('Content-disposition', 'filename='. $fichier);
		 
		return $response;
	}	
	public function chercheAction()
	{
		//On crée le FormBuilder grâce à la méthode du contrôleur. Toujours sans entité
		$form = $this->createForm(new RechercheDevisType());
		$user = $this->getUser();
		//On récupère la requête
		$request = $this->getRequest();

		if($request->getMethod() == 'POST')
		{
			//lier le formulaire avec la requete
			$form->bind($request);
			
			//On vérifie que les valeurs entrées sont correctes
			if($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
	
				//On récupère les données entrées dans le formulaire par l'utilisateur
				$data = $this->getRequest()->request->get('nas_appbundle_rechercheDevis');
				
				//init idUser si utilisateur != admin / superadmin
				if(!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
				{
					$idUser = $user->getId();
				}
				else
				{
					$idUser = "";					
				}				
				
				//On va récupérer la méthode dans le repository afin de trouver toutes les annonces filtrées par les paramètres du formulaire
                $listeDevis = $em->getRepository('NasAppBundle:Devis')->findDevisByParametres($data, $idUser);			
				
				
				//Puis on redirige vers la page de visualisation de cette liste d'annonces
                return $this->render('NasAppBundle:Devis:liste.html.twig', array('listeDevis' => $listeDevis));				
			}
		}		
		return $this->render('NasAppBundle:Devis:recherche.html.twig', array('form'=>$form->createView()));
	}
	public function annuleAction($idDevis)
	{			
		$request = $this->getRequest();
		$form = $this->createForm(new AnnuleDevisType());
		
		if($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				
				$data = $this->getRequest()->request->get('nas_appbundle_annuleDevis'); //récupère les données du formulaire dans un array data
				
				$devis = $em->getRepository('NasAppBundle:Devis')->find($idDevis);
				$devis->setEtat('cancel');
				$devis->setCommentaire($data['commentaire']);
				
				$em->persist($devis);
				$em->flush();
				
			/*	$message = \Swift_Message::newInstance()
				->setSubject('Hello Email')
				->setFrom('julienrochart@hotmail.fr')
				->setTo('julienrochart@hotmail.fr')
				->setBody("MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>MON TEXTE<br>");
				$this->get('mailer')->send($message); */
				
			}
		}
		return $this->redirect($this->generateUrl('nasApp_listeDevis'));
	}
	
	public function nbrJoursAction()
	{

		$request = $this->get('request');
		$interventionId = '';
		$interventionId = $request->request->get('interventionId');

		$em = $this->container->get('doctrine')->getEntityManager();
		$nbrJours = 'toto';
		if($interventionId != '')
		{
		
			$em = $this->getDoctrine()->getManager();
			$nbrJours = $em->getRepository('NasAppBundle:Intervention')->find($interventionId)->getNbrJours();			
		
		}
		else {
			$nbrJours = "N/A";
		}
		
		//prepare the response, e.g.
		$response = $nbrJours;
		//you can return result as JSON
		return new Response(json_encode($response)); 		
		
	}
}


