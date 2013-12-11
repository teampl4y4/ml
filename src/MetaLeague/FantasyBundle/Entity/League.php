<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * League
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\LeagueRepository")
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
     * @ORM\Column(name="name", type="string", length=255)
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
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

    /**
     * @var User
     * @ORM\OneToOne(targetEntity="User")
     * @JoinColumn(name="commissioner", referencedColumnName="id")
     */
    private $commissioner;

    /**
     * @ManyToMany(targetEntity="User", mappedBy="groups")
     **/
    protected $users;

    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
        $user->addLeague($this);
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



}
