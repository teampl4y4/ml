<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProGame
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\ProGameRepository")
 */
class ProGame
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
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetime")
     */
    private $endTime;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="teamOneScore", type="object")
     */
    private $teamOneScore;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="teamTwoScore", type="object")
     */
    private $teamTwoScore;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="leagues")
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
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return ProGame
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return ProGame
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set teamOneScore
     *
     * @param \stdClass $teamOneScore
     * @return ProGame
     */
    public function setTeamOneScore($teamOneScore)
    {
        $this->teamOneScore = $teamOneScore;

        return $this;
    }

    /**
     * Get teamOneScore
     *
     * @return \stdClass 
     */
    public function getTeamOneScore()
    {
        return $this->teamOneScore;
    }

    /**
     * Set teamTwoScore
     *
     * @param \stdClass $teamTwoScore
     * @return ProGame
     */
    public function setTeamTwoScore($teamTwoScore)
    {
        $this->teamTwoScore = $teamTwoScore;

        return $this;
    }

    /**
     * Get teamTwoScore
     *
     * @return \stdClass 
     */
    public function getTeamTwoScore()
    {
        return $this->teamTwoScore;
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
}
