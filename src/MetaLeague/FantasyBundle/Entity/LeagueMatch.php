<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
