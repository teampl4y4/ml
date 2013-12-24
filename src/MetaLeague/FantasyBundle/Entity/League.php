<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * League
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class League
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
     * @ORM\Column(name="name", type="string", length=15)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="leagues")
     */
    private $game;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="LeagueMatch", mappedBy="league")
     */
    private $matches;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="commissioner", referencedColumnName="id")
     */
    private $commissioner;


    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="LeagueInvite", mappedBy="league")
     */
    private $invites;

    /**
     * @ManyToMany(targetEntity="User", mappedBy="leagues")
     **/
    protected $users;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isPrivate", type="boolean", nullable=true)
     */
    private $isPrivate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdAt;

    public function __construct()
    {
        $this->users    = new ArrayCollection();
        $this->matches  = new ArrayCollection();
        $this->invites  = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
        $user->addLeague($this);
    }

    public function addMatch(LeagueMatch $match)
    {
        $this->matches[] = $match;
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
     * @return League
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
     * Set description
     *
     * @param string $description
     * @return League
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game) {
        $this->game = $game;
    }

    /**
     * Get Game
     *
     * @return Game
     */
    public function getGame() {
        return $this->game;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\User $commissioner
     */
    public function setCommissioner(User $commissioner) {
        $this->commissioner = $commissioner;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\User
     */
    public function getCommissioner() {
        return $this->commissioner;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $users
     */
    public function setUsers(\Doctrine\Common\Collections\ArrayCollection $users) {
        $this->users = $users;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * @param boolean $isPrivate
     */
    public function setIsPrivate($isPrivate) {
        $this->isPrivate = $isPrivate;
    }

    /**
     * @return boolean
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $matches
     */
    public function setMatches(ArrayCollection $matches) {
        $this->matches = $matches;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMatches() {
        return $this->matches;
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
     * @param \Doctrine\Common\Collections\ArrayCollection $invites
     */
    public function setInvites(ArrayCollection $invites) {
        $this->invites = $invites;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getInvites() {
        return $this->invites;
    }


    public function __toString()
    {
        return $this->getName();
    }

}
