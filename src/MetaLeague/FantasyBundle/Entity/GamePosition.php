<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GamePosition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\GamePositionRepository")
 */
class GamePosition
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
     * @ORM\Column(name="listingPriority", type="smallint")
     */
    private $listingPriority;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="subPositions", type="array")
     */
    private $subPositions;


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
     * Set listingPriority
     *
     * @param integer $listingPriority
     * @return GamePosition
     */
    public function setListingPriority($listingPriority)
    {
        $this->listingPriority = $listingPriority;

        return $this;
    }

    /**
     * Get listingPriority
     *
     * @return integer 
     */
    public function getListingPriority()
    {
        return $this->listingPriority;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GamePosition
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
     * Set subPositions
     *
     * @param array $subPositions
     * @return GamePosition
     */
    public function setSubPositions($subPositions)
    {
        $this->subPositions = $subPositions;

        return $this;
    }

    /**
     * Get subPositions
     *
     * @return array 
     */
    public function getSubPositions()
    {
        return $this->subPositions;
    }
}
