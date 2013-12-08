<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProGameAction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\ProGameActionRepository")
 */
class ProGameAction
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
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="leagues")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

    /**
     * @var \MetaLeague\FantasyBundle\Entity\ProPlayer
     *
     * @ORM\OneToOne(targetEntity="ProPlayer")
     */
    private $proPlayer;

    /**
     * @var \MetaLeague\FantasyBundle\Entity\ProGame
     *
     * @ORM\OneToOne(targetEntity="ProGame")
     */
    private $proGame;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="occuredInGameAt", type="time")
     */
    private $occuredInGameAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointsAwarded", type="integer")
     */
    private $pointsAwarded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;


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
     * Set occuredInGameAt
     *
     * @param \DateTime $occuredInGameAt
     * @return ProGameAction
     */
    public function setOccuredInGameAt($occuredInGameAt)
    {
        $this->occuredInGameAt = $occuredInGameAt;

        return $this;
    }

    /**
     * Get occuredInGameAt
     *
     * @return \DateTime 
     */
    public function getOccuredInGameAt()
    {
        return $this->occuredInGameAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProGameAction
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param int $pointsAwarded
     */
    public function setPointsAwarded($pointsAwarded) {
        $this->pointsAwarded = $pointsAwarded;
    }

    /**
     * @return int
     */
    public function getPointsAwarded() {
        return $this->pointsAwarded;
    }

    /**
     * @param Game $game
     */
    public function setGame(Game $game) {
        $this->game = $game;
    }

    /**
     * @return mixed
     */
    public function getGame() {
        return $this->game;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\ProGame $proGame
     */
    public function setProGame($proGame) {
        $this->proGame = $proGame;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\ProGame
     */
    public function getProGame() {
        return $this->proGame;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\ProPlayer $proPlayer
     */
    public function setProPlayer(ProPlayer $proPlayer) {
        $this->proPlayer = $proPlayer;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\ProPlayer
     */
    public function getProPlayer() {
        return $this->proPlayer;
    }



}
