<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * FantasyTeam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\FantasyTeamRepository")
 */
class FantasyTeam
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="teams")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="FantasyTeamRosterSpot", mappedBy="fantasyTeam")
     *
     */
    private $rosterSpots;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdAt;

    public function __construct()
    {
        $this->rosterSpots = new ArrayCollection();
        $this->createdAt   = new \DateTime();
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
     * Set name
     *
     * @param string $name
     * @return FantasyTeam
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return FantasyTeam
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\User $user
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $rosterSpots
     */
    public function setRosterSpots(ArrayCollection $rosterSpots) {
        $this->rosterSpots = $rosterSpots;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRosterSpots() {
        return $this->rosterSpots;
    }

}