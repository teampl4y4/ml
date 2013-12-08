<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeagueActionConfig
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\LeagueActionConfigRepository")
 */
class LeagueActionConfig
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
     * @var integer
     *
     * @ORM\Column(name="actionScore", type="integer")
     */
    private $actionScore;


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
     * Set actionScore
     *
     * @param integer $actionScore
     * @return LeagueActionConfig
     */
    public function setActionScore($actionScore)
    {
        $this->actionScore = $actionScore;

        return $this;
    }

    /**
     * Get actionScore
     *
     * @return integer 
     */
    public function getActionScore()
    {
        return $this->actionScore;
    }
}
