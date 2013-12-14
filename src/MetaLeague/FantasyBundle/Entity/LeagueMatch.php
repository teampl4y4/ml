<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn as JoinColumn;

/**
 * LeagueMatch
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\LeagueMatchRepository")
 */
class LeagueMatch
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
     * @ORM\Column(name="startsOn", type="datetime")
     */
    private $startsOn;

    /**
     * @var FantasyTeam
     *
     * @ORM\OneToOne(targetEntity="FantasyTeam")
     * @ORM\JoinColumn(name="homeTeam", referencedColumnName="id")
     */
    private $homeTeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="homeTeamScore", type="smallint")
     */
    private $homeTeamScore;

    /**
     * @var FantasyTeam
     *
     * @ORM\OneToOne(targetEntity="FantasyTeam")
     * @ORM\JoinColumn(name="awayTeam", referencedColumnName="id")
     */
    private $awayTeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="awayTeamScore", type="smallint")
     */
    private $awayTeamScore;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
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
     * Set startsOn
     *
     * @param \DateTime $startsOn
     * @return LeagueMatch
     */
    public function setStartsOn($startsOn)
    {
        $this->startsOn = $startsOn;

        return $this;
    }

    /**
     * Get startsOn
     *
     * @return \DateTime 
     */
    public function getStartsOn()
    {
        return $this->startsOn;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LeagueMatch
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\FantasyTeam $awayTeam
     */
    public function setAwayTeam(FantasyTeam $awayTeam) {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\FantasyTeam
     */
    public function getAwayTeam() {
        return $this->awayTeam;
    }

    /**
     * @param int $awayTeamScore
     */
    public function setAwayTeamScore($awayTeamScore) {
        $this->awayTeamScore = $awayTeamScore;
    }

    /**
     * @return int
     */
    public function getAwayTeamScore() {
        return $this->awayTeamScore;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\FantasyTeam $homeTeam
     */
    public function setHomeTeam(FantasyTeam $homeTeam) {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\FantasyTeam
     */
    public function getHomeTeam() {
        return $this->homeTeam;
    }

    /**
     * @param int $homeTeamScore
     */
    public function setHomeTeamScore($homeTeamScore) {
        $this->homeTeamScore = $homeTeamScore;
    }

    /**
     * @return int
     */
    public function getHomeTeamScore() {
        return $this->homeTeamScore;
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
}
