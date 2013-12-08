<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeagueRoster
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\LeagueRosterRepository")
 */
class LeagueRoster
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
     * @var boolean
     *
     * @ORM\Column(name="isStarter", type="boolean")
     */
    private $isStarter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="addedOn", type="datetime")
     */
    private $addedOn;


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
     * Set isStarter
     *
     * @param boolean $isStarter
     * @return LeagueRoster
     */
    public function setIsStarter($isStarter)
    {
        $this->isStarter = $isStarter;

        return $this;
    }

    /**
     * Get isStarter
     *
     * @return boolean 
     */
    public function getIsStarter()
    {
        return $this->isStarter;
    }

    /**
     * Set addedOn
     *
     * @param \DateTime $addedOn
     * @return LeagueRoster
     */
    public function setAddedOn($addedOn)
    {
        $this->addedOn = $addedOn;

        return $this;
    }

    /**
     * Get addedOn
     *
     * @return \DateTime 
     */
    public function getAddedOn()
    {
        return $this->addedOn;
    }
}
