<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProMatchAction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\ProMatchActionRepository")
 */
class ProMatchAction
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
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="games")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

    /**
     * @var \MetaLeague\FantasyBundle\Entity\ProPlayer
     *
     * @ORM\OneToOne(targetEntity="ProPlayer")
     * @ORM\JoinColumn(name="pro_player_id", referencedColumnName="id")
     */
    private $proPlayer;

    /**
     * @var \MetaLeague\FantasyBundle\Entity\ProMatch
     *
     * @ORM\ManyToOne(targetEntity="ProMatch", inversedBy="pro_matches")
     * @ORM\JoinColumn(name="pro_match_id", referencedColumnName="id")
     */
    private $proMatch;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="gameStats", type="object")
     */
    private $gameStats;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ProMatchAction
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
     * Set gameStats
     *
     * @param \stdClass $data
     * @return ProMatchAction
     */
    public function setGameStats($data)
    {
        $this->gameStats = $data;

        return $this;
    }

    /**
     * Get gameStats
     *
     * @return \stdClass 
     */
    public function getGameStats()
    {
        return $this->gameStats;
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
     * @param \MetaLeague\FantasyBundle\Entity\ProMatch $proMatch
     */
    public function setProMatch($proMatch) {
        $this->proMatch = $proMatch;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\ProMatch
     */
    public function getProMatch() {
        return $this->proMatch;
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
