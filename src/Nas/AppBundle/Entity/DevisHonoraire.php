<?php

namespace Nas\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
 * @ORM\Table(name="devishonoraire")
*/
class DevisHonoraire
{

	/**
	* @ORM\id
	* @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Devis")
	*/
	private $devis;
	
	/**
	* @ORM\id
	* @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Honoraire")
	*/
	private $honoraire;

    /**
     *
     * @ORM\Column(name="mnt", type="decimal", scale=2)
     */
    private $mnt;



    /**
     * Set mnt
     *
     * @param integer $mnt
     * @return DevisHonoraire
     */
    public function setMnt($mnt)
    {
        $this->mnt = $mnt;

        return $this;
    }

    /**
     * Get mnt
     *
     * @return integer 
     */
    public function getMnt()
    {
        return $this->mnt;
    }

    /**
     * Set devis
     *
     * @param \Nas\AppBundle\Entity\Devis $devis
     * @return DevisHonoraire
     */
    public function setDevis(\Nas\AppBundle\Entity\Devis $devis)
    {
        $this->devis = $devis;

        return $this;
    }

    /**
     * Get devis
     *
     * @return \Nas\AppBundle\Entity\Devis 
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * Set honoraire
     *
     * @param \Nas\AppBundle\Entity\Honoraire $honoraire
     * @return DevisHonoraire
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
}
