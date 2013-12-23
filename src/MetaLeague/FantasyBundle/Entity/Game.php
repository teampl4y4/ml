<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Game
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="teaserImage", type="string", length=255)
     */
    private $teaserImage;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="League", mappedBy="game")
     */
    private $leagues;

    public function __construct()
    {
        $this->leagues = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Game
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set teaser-image
     *
     * @param string $teaserImage
     * @return Game
     */
    public function setTeaserImage($teaserImage)
    {
        $this->teaserImage = $teaserImage;

        return $this;
    }

    /**
     * Get teaser-image
     *
     * @return string 
     */
    public function getTeaserImage()
    {
        return $this->teaserImage;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $leagues
     */
    public function setLeagues(ArrayCollection $leagues) {
        $this->leagues = $leagues;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLeagues() {
        return $this->leagues;
    }
}
