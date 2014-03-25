<?php

namespace Nas\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
//use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nas\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Nas\AppBundle\Entity\Specialite")
	 * @ORM\JoinColumn(nullable=true)
	 */
	private $specialite;


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
     * @param \Nas\AppBundle\Entity\Specialite $specialite
     * @return User
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
