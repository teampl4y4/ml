<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeagueRosterConfig
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\LeagueRosterConfigRepository")
 */
class LeagueRosterConfig
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
     * @ORM\Column(name="numLegal", type="smallint")
     */
    private $numLegal;


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
     * Set numLegal
     *
     * @param integer $numLegal
     * @return LeagueRosterConfig
     */
    public function setNumLegal($numLegal)
    {
        $this->numLegal = $numLegal;

        return $this;
    }

    /**
     * Get numLegal
     *
     * @return integer 
     */
    public function getNumLegal()
    {
        return $this->numLegal;
    }
}
