<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Honoraire
 *
 * @ORM\Table(name="honoraire")
 * @ORM\Entity(repositoryClass="Nas\AppBundle\Entity\HonoraireRepository")
 */
class Honoraire
{

	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Specialite", inversedBy="honoraires")
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     *
     * @ORM\Column(name="pourcentageFacture", type="decimal", scale=2)
     */
    private $pourcentageFacture;

    /**
     *
     * @ORM\Column(name="pourcentageDevis", type="decimal", scale=2, nullable=true)
     */
    private $pourcentageDevis;


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
     * Set type
     *
     * @param string $type
     * @return Honoraire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set pourcentageFacture
     *
     * @param integer $pourcentageFacture
     * @return Honoraire
     */
    public function setPourcentageFacture($pourcentageFacture)
    {
        $this->pourcentageFacture = $pourcentageFacture;

        return $this;
    }

    /**
     * Get pourcentageFacture
     *
     * @return integer 
     */
    public function getPourcentageFacture()
    {
        return $this->pourcentageFacture;
    }

    /**
     * Set pourcentageDevis
     *
     * @param integer $pourcentageDevis
     * @return Honoraire
     */
    public function setPourcentageDevis($pourcentageDevis)
    {
        $this->pourcentageDevis = $pourcentageDevis;

        return $this;
    }

    /**
     * Get pourcentageDevis
     *
     * @return integer 
     */
    public function getPourcentageDevis()
    {
        return $this->pourcentageDevis;
    }

    /**
     * Set specialite
     *
     * @param \Nas\AppBundle\Entity\Specialite $specialite
     * @return Honoraire
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
