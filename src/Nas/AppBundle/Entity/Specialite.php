<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="Nas\AppBundle\Entity\SpecialiteRepository")
 * @UniqueEntity (fields="specialite", message="Cette specialite existe deja.")
 */
class Specialite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;
	
	/**
	* @ORM\OneToMany(targetEntity="Nas\AppBundle\Entity\Intervention", mappedBy="specialite", cascade={"persist"})
	*/
	private $interventions; // Ici interventions prend un « s », car une spécialité a plusieurs interventions !	

	/**
     * Constructor
     */
    public function __construct()
    {
        $this->honoraires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->interventions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set specialite
     *
     * @param string $specialite
     * @return Specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Add interventions
     *
     * @param \Nas\AppBundle\Entity\Intervention $interventions
     * @return Specialite
     */
    public function addIntervention(\Nas\AppBundle\Entity\Intervention $interventions)
    {
        $this->interventions[] = $interventions;
		$interventions->setSpecialite($this);

        return $this;
    }

    /**
     * Remove interventions
     *
     * @param \Nas\AppBundle\Entity\Intervention $interventions
     */
    public function removeIntervention(\Nas\AppBundle\Entity\Intervention $interventions)
    {
        $this->interventions->removeElement($interventions);
    }

    /**
     * Get interventions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInterventions()
    {
        return $this->interventions->toArray();
    }
}
