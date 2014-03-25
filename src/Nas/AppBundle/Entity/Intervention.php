<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Intervention
 *
 * @ORM\Table(name="intervention")
 * @ORM\Entity(repositoryClass="Nas\AppBundle\Entity\InterventionRepository")
 * @UniqueEntity (fields="intervention", message="Cette intervention existe deja.")
 */
class Intervention
{
	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Specialite", inversedBy="interventions")
	 * @ORM\JoinColumn(name="specialite_id", referencedColumnName="id")
	 */
	private $specialite;

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
     * @ORM\Column(name="intervention", type="text")
     */
    private $intervention;

    /**
     *
     * @ORM\Column(name="ghs", type="decimal", scale=2)
     */
    private $ghs;

    /**
     *
     * @ORM\Column(name="dmi", type="decimal", scale=2)
     */
    private $dmi;

    /**
     *
     * @ORM\Column(name="honoraires", type="decimal", scale=2)
     */
    private $honoraires;

    /**
     *
     * @ORM\Column(name="dontSpecialiste", type="decimal", scale=2)
     */
    private $dontSpecialiste;

    /**
     *
     * @ORM\Column(name="total", type="decimal", scale=2, nullable=true)
     */
    private $total;


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
     * Set intervention
     *
     * @param string $intervention
     * @return Intervention
     */
    public function setIntervention($intervention)
    {
        $this->intervention = $intervention;

        return $this;
    }

    /**
     * Get intervention
     *
     * @return string 
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * Set ghs
     *
     * @param integer $ghs
     * @return Intervention
     */
    public function setGhs($ghs)
    {
        $this->ghs = $ghs;

        return $this;
    }

    /**
     * Get ghs
     *
     * @return integer 
     */
    public function getGhs()
    {
        return $this->ghs;
    }

    /**
     * Set dmi
     *
     * @param integer $dmi
     * @return Intervention
     */
    public function setDmi($dmi)
    {
        $this->dmi = $dmi;

        return $this;
    }

    /**
     * Get dmi
     *
     * @return integer 
     */
    public function getDmi()
    {
        return $this->dmi;
    }

    /**
     * Set honoraires
     *
     * @param integer $honoraires
     * @return Intervention
     */
    public function setHonoraires($honoraires)
    {
        $this->honoraires = $honoraires;

        return $this;
    }

    /**
     * Get honoraires
     *
     * @return integer 
     */
    public function getHonoraires()
    {
        return $this->honoraires;
    }

    /**
     * Set dontSpecialiste
     *
     * @param integer $dontSpecialiste
     * @return Intervention
     */
    public function setDontSpecialiste($dontSpecialiste)
    {
        $this->dontSpecialiste = $dontSpecialiste;

        return $this;
    }

    /**
     * Get dontSpecialiste
     *
     * @return integer 
     */
    public function getDontSpecialiste()
    {
        return $this->dontSpecialiste;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Intervention
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->ghs+$this->dmi+$this->honoraires;
    }


    /**
     * Set specialite
     *
     * @param \Nas\AppBundle\Entity\Specialite $specialite
     * @return Intervention
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
}
