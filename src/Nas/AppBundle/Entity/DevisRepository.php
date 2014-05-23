<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * DevisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DevisRepository extends EntityRepository
{
	function extraction($data)
	{
		if($data['dateDu'] != "")
		{
			$dateInput = explode('/',$data['dateDu']);
			$ukDateDu = $dateInput[2].'-'.$dateInput[1].'-'.$dateInput[0];
		}
		if($data['dateAu'] != "")
		{
			$dateInput = explode('/',$data['dateAu']);
			$ukDateAu = $dateInput[2].'-'.$dateInput[1].'-'.$dateInput[0];
		}
		
		$query = $this->CreateQueryBuilder('d');		

		if($data['utilisateur'] != '')
		{
			$query->join('d.user', 'u')
				->andwhere('u.id = :utilisateur')
				->setParameter('utilisateur',$data['utilisateur']);
		}		
		
		if($data['specialite'] != "")
		{
			$query->join('d.specialite', 's')
				->andWhere('d.specialite = :specialite')
				->setParameter('specialite',$data['specialite']);
		}	
		
		if($data['dateDu'] != "" && $data['dateAu'] != "")
		{
			$query->andWhere('d.date >= :dateDu')
				->andWhere('d.date <= :dateAu')	
				->setParameter('dateDu',$ukDateDu)
				->setParameter('dateAu',$ukDateAu);
		}		
		
		return $query->getQuery()->getResult();
		
	}
	function findDevisByParametres($data, $id_user)
	{
		$nom = $data['nomPatient'];
		$prenom = $data['prenomPatient'];
		$intervention = $data['intervention'];
		
		if($data['dateDu'] != "")
		{
			$dateInput = explode('/',$data['dateDu']);
			$ukDateDu = $dateInput[2].'-'.$dateInput[1].'-'.$dateInput[0];
		}
		if($data['dateAu'] != "")
		{
			$dateInput = explode('/',$data['dateAu']);
			$ukDateAu = $dateInput[2].'-'.$dateInput[1].'-'.$dateInput[0];
		}		
		
		$query = $this->CreateQueryBuilder('d');
		
		if($data['nomPatient'] != "" || $data['prenomPatient'] != "")
		{
			$query->join('d.patient', 'p')
				->andwhere('p.nom LIKE :nomPatient OR p.prenom LIKE :prenomPatient')
				->setParameters(array(
					'nomPatient'=>$nom,
					'prenomPatient'=>$prenom));				
		}
		
		if($data['intervention'] != "")
		{
			$query->join('d.intervention', 'i')
				->andWhere('i.intervention = :intervention')
				->setParameters(array(
					'intervention'=>$intervention));
		}
		
		if($data['dateDu'] != "" && $data['dateAu'] != "")
		{
			$query->andWhere('d.date >= :dateDu')
				->andWhere('d.date <= :dateAu')	
				->setParameters(array(
					'dateDu'=>$ukDateDu,
					'dateAu'=>$ukDateAu));
		}
		
		if($id_user != "")
		{
			$etat = "success";
			$query->join('d.user', 'u')
					->andWhere('u.id = '.$id_user)
					->andWhere("d.etat = 'success'");
		}
		
		
		
		return $query->getQuery()->getResult();
	}
}
