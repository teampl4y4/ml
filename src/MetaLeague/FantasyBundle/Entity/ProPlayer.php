<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn as JoinColumn;

/**
 * ProPlayer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\ProPlayerRepository")
 */
class ProPlayer
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255)
     */
    private $alias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="datetime", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var GamePosition
     *
     * @ORM\OneToOne(targetEntity="GamePosition")
     * @ORM\JoinColumn(name="gamePosition_id", referencedColumnName="id")
     */
    private $gamePosition;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

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
     * Set firstName
     *
     * @param string $firstName
     * @return ProPlayer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return ProPlayer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return ProPlayer
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\GamePosition $gamePosition
     */
    public function setGamePosition(GamePosition $gamePosition) {
        $this->gamePosition = $gamePosition;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\GamePosition
     */
    public function getGamePosition() {
        return $this->gamePosition;
    }

    /**
     * @param string $alias
     */
    public function setAlias($alias) {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getAlias() {
        return $this->alias;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\Game $game
     */
    public function setGame(Game $game) {
        $this->game = $game;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\Game
     */
    public function getGame() {
        return $this->game;
    }

}
