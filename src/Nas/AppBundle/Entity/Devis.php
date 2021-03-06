<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="Nas\AppBundle\Entity\DevisRepository")
 */
class Devis
{

	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Patient", cascade={"persist"})
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $patient;
	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Specialite")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $specialite;
	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Intervention")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $intervention;
	/**
	 * @ORM\ManyToOne(targetEntity="Nas\UserBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $user;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chambre", type="boolean", nullable=true)
     */
    private $chambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrJours", type="integer", nullable=true)
     */
    private $nbrJours;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrJoursSupp", type="integer", nullable=true)
     */
    private $nbrJoursSupp;

    /**
     * @var integer
     *
     * @ORM\Column(name="honorairesPraticien", type="decimal", scale=2, nullable=true)
     */
    private $honorairesPraticien;

    /**
     * @var integer
     *
     * @ORM\Column(name="honorairesAnesthesiste", type="decimal", scale=2, nullable=true)
     */
    private $honorairesAnesthesiste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accompagnant ", type="boolean", nullable=true)
     */
    private $accompagnant ;	

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
	
    /**
     * @ORM\Column(name="mntPartClinique", type="decimal", scale=2)
     */
    private $mntPartClinique;
	
	/**
     * @ORM\Column(name="mntChambre", type="decimal", scale=2)
     */
    private $mntChambre;

	/**
     * @ORM\Column(name="mntAccompagnant", type="decimal", scale=2)
     */
    private $mntAccompagnant;

	/**
     * @ORM\Column(name="etat", type="text")
     */
    private $etat;
	
	/**
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

	/**
     * @ORM\Column(name="clinique", type="text")
     */
    private $clinique;	

	public function __construct()
	{
		$this->date = new \Datetime();
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set chambre
     *
     * @param boolean $chambre
     * @return Devis
     */
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return boolean 
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set nbrJours
     *
     * @param integer $nbrJours
     * @return Devis
     */
    public function setNbrJours($nbrJours)
    {
        $this->nbrJours = $nbrJours;

        return $this;
    }

    /**
     * Get nbrJours
     *
     * @return integer 
     */
    public function getNbrJours()
    {
        return $this->nbrJours;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Devis
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set patient
     *
     * @param \Nas\AppBundle\Entity\Patient $patient
     * @return Devis
     */
    public function setPatient(\Nas\AppBundle\Entity\Patient $patient)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Nas\AppBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set specialite
     *
     * @param \Nas\AppBundle\Entity\Specialite $specialite
     * @return Devis
     */
    public function setSpecialite(\Nas\AppBundle\Entity\Specialite $specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \Nas\AppBundle\Entity\Specialite 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set intervention
     *
     * @param \Nas\AppBundle\Entity\Intervention $intervention
     * @return Devis
     */
    public function setIntervention(\Nas\AppBundle\Entity\Intervention $intervention)
    {
        $this->intervention = $intervention;

        return $this;
    }

    /**
     * Get intervention
     *
     * @return \Nas\AppBundle\Entity\Intervention 
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * Set honoraire
     *
     * @param \Nas\AppBundle\Entity\Honoraire $honoraire
     * @return Devis
     */
    public function setHonoraire(\Nas\AppBundle\Entity\Honoraire $honoraire)
    {
        $this->honoraire = $honoraire;

        return $this;
    }

    /**
     * Get honoraire
     *
     * @return \Nas\AppBundle\Entity\Honoraire 
     */
    public function getHonoraire()
    {
        return $this->honoraire;
    }

    /**
     * Set mntPartClinique
     *
     * @param \int $mntPartClinique
     * @return Devis
     */
    public function setMntPartClinique($mntPartClinique)
    {
        $this->mntPartClinique = $mntPartClinique;

        return $this;
    }

    /**
     * Get mntPartClinique
     *
     * @return \int 
     */
    public function getMntPartClinique()
    {
        return $this->mntPartClinique;
    }

    /**
     * Set mntChambre
     *
     * @param \int $mntChambre
     * @return Devis
     */
    public function setMntChambre($mntChambre)
    {
        $this->mntChambre = $mntChambre;

        return $this;
    }

    /**
     * Get mntChambre
     *
     * @return \int 
     */
    public function getMntChambre()
    {
        return $this->mntChambre;
    }

    /**
     * Set user
     *
     * @param \Nas\UserBundle\Entity\User $user
     * @return Devis
     */
    public function setUser(\Nas\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Nas\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Devis
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Devis
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nbrJoursSupp
     *
     * @param integer $nbrJoursSupp
     * @return Devis
     */
    public function setNbrJoursSupp($nbrJoursSupp)
    {
        $this->nbrJoursSupp = $nbrJoursSupp;
    
        return $this;
    }

    /**
     * Get nbrJoursSupp
     *
     * @return integer 
     */
    public function getNbrJoursSupp()
    {
        return $this->nbrJoursSupp;
    }

    /**
     * Set accompagnant
     *
     * @param boolean $accompagnant
     * @return Devis
     */
    public function setAccompagnant($accompagnant)
    {
        $this->accompagnant = $accompagnant;
    
        return $this;
    }

    /**
     * Get accompagnant
     *
     * @return boolean 
     */
    public function getAccompagnant()
    {
        return $this->accompagnant;
    }

    /**
     * Set honorairesPraticien
     *
     * @param integer $honorairesPraticien
     * @return Devis
     */
    public function setHonorairesPraticien($honorairesPraticien)
    {
        $this->honorairesPraticien = $honorairesPraticien;
    
        return $this;
    }

    /**
     * Get honorairesPraticien
     *
     * @return integer 
     */
    public function getHonorairesPraticien()
    {
        return $this->honorairesPraticien;
    }

    /**
     * Set honorairesAnesthesiste
     *
     * @param string $honorairesAnesthesiste
     * @return Devis
     */
    public function setHonorairesAnesthesiste($honorairesAnesthesiste)
    {
        $this->honorairesAnesthesiste = $honorairesAnesthesiste;
    
        return $this;
    }

    /**
     * Get honorairesAnesthesiste
     *
     * @return string 
     */
    public function getHonorairesAnesthesiste()
    {
        return $this->honorairesAnesthesiste;
    }

    /**
     * Set mntAccompagnant
     *
     * @param integer $mntAccompagnant
     * @return Devis
     */
    public function setMntAccompagnant($mntAccompagnant)
    {
        $this->mntAccompagnant = $mntAccompagnant;
    
        return $this;
    }

    /**
     * Get mntAccompagnant
     *
     * @return integer 
     */
    public function getMntAccompagnant()
    {
        return $this->mntAccompagnant;
    }

    /**
     * Set clinique
     *
     * @param string $clinique
     * @return Devis
     */
    public function setClinique($clinique)
    {
        $this->clinique = $clinique;
    
        return $this;
    }

    /**
     * Get clinique
     *
     * @return string 
     */
    public function getClinique()
    {
        return $this->clinique;
    }
}
