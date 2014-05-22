<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\AppBundle\Entity\Devis;
use Nas\AppBundle\Entity\DevisHonoraire;
use Nas\AppBundle\Form\ExtractionDevisType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ExtractionController extends Controller
{

	public function indexAction()
	{
		$form = $this->createForm(new ExtractionDevisType());
		
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST')
		{
			$form->bind($request);
			if($form->isValid())
			{

				$em = $this->getDoctrine()->getManager();
				$data = $this->getRequest()->request->get('nas_appbundle_extractionDevis');
				
				$listeDevis = $em->getRepository('NasAppBundle:Devis')->extraction($data);						

				return $this->render('NasAppBundle:Extraction:result.html.twig', array('listeDevis'=>$listeDevis));
				
			}
		}
		return $this->render('NasAppBundle:Extraction:extraction.html.twig', array('form'=>$form->createView()));
	}
	public function exportAction($listeDevis)
	{
/* 		foreach($listeDevis as $i => $devis)
		{
			
		} */
		
        // ask the service for a Excel5
	   $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

	   $phpExcelObject->getProperties()->setCreator("liuggio")
		   ->setLastModifiedBy("Giulio De Donato")
		   ->setTitle("Office 2005 XLSX Test Document")
		   ->setSubject("Office 2005 XLSX Test Document")
		   ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
		   ->setKeywords("office 2005 openxml php")
		   ->setCategory("Test result file");
	   $phpExcelObject->setActiveSheetIndex(0)
		   ->setCellValue('A1', 'Hello')
		   ->setCellValue('B2', 'world!');
	   $phpExcelObject->getActiveSheet()->setTitle('Simple');
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $phpExcelObject->setActiveSheetIndex(0);

		// create the writer
		$writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
		// create the response
		$response = $this->get('phpexcel')->createStreamedResponse($writer);
		// adding headers
		$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
		$response->headers->set('Content-Disposition', 'attachment;filename=stream-file.xls');
		$response->headers->set('Pragma', 'public');
		$response->headers->set('Cache-Control', 'maxage=1');

		return $response; 		
	}
	
	public function voirAction($idDevis)
	{
		$form = $this->createForm(new AnnuleDevisType());
		//$request = $this->getRequest();
		
		$em = $this->getDoctrine()->getManager();
		
		$devis = $em->getRepository('NasAppBundle:Devis')->find($idDevis);
		$patient = $em->getRepository('NasAppBundle:Patient')->find($devis->getPatient());
		$specialite = $em->getRepository('NasAppBundle:Specialite')->find($devis->getSpecialite());
		$intervention = $em->getRepository('NasAppBundle:Intervention')->find($devis->getIntervention());
		
		$listeHonoraires = $em->getRepository('NasAppBundle:DevisHonoraire')->findByDevis($devis->getId());
		
		$totalFacture = $devis->getMntPartClinique();
		$totalFacture += $devis->getMntChambre();
		foreach($listeHonoraires as $i => $honoraire)
		{
			$totalFacture += $honoraire->getMnt();
		}
		
		if(!$this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) 
		{
			return $this->render('NasAppBundle:Devis:voir.html.twig', array('devis'=>$devis,
																		'patient'=>$patient,
																		'specialite'=>$specialite,
																		'intervention'=>$intervention,
																		'listeHonoraires'=>$listeHonoraires,
																		'totalFacture'=>$totalFacture));
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
		$devis = new Devis();		
		$user = $this->getUser();
		
		//recuperer l'id specialite de l'utilisateur, pour charger la liste des interventions.
		$idSpe = $user->getSpecialite()->getId();
		$devis->setSpecialite($this->getDoctrine()->getManager()->getRepository('NasAppBundle:Specialite')->find($idSpe));
	
		$form = $this->createForm(new DevisType($idSpe) , $devis);
			
		$request = $this->get('request');
		
		//si la requete est de type POST
		if($request->getMethod() == 'POST')
		{	
			//lien requete <=> formulaire
			$form->bind($request);
			
			if($form->isValid())
			{
				$devis->setUser($user);
				
				$devis->setEtat('success');
				
				//print_r($devis->getIntervention()->getId());
				//CALCULER DU MONTANT CHAMBRE--------------
				if($devis->getChambre() ==1)
				{
					$devis->setMntChambre($devis->getNbrJours()*200);
				}
				else
				{
					$devis->setMntChambre(0);	
				}
				//CALCULER DU MONTANT PART CLINIQUE--------------
				$intervention = $this->getDoctrine()->getManager()->getRepository('NasAppBundle:Intervention')->find($devis->getIntervention()->getId());
				$devis->setMntPartClinique($intervention->getGhs()+$intervention->getDmi());
				
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
}


