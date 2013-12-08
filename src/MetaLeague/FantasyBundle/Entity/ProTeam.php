<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProTeam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\ProTeamRepository")
 */
class ProTeam
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
     * @ORM\Column(name="logoUrl", type="string", length=255)
     */
    private $logoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="formedOn", type="datetime")
     */
    private $formedOn;


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
     * Set logoUrl
     *
     * @param string $logoUrl
     * @return ProTeam
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Get logoUrl
     *
     * @return string 
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ProTeam
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
     * Set description
     *
     * @param string $description
     * @return ProTeam
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
     * Set formedOn
     *
     * @param \DateTime $formedOn
     * @return ProTeam
     */
    public function setFormedOn($formedOn)
    {
        $this->formedOn = $formedOn;

        return $this;
    }

    /**
     * Get formedOn
     *
     * @return \DateTime 
     */
    public function getFormedOn()
    {
        return $this->formedOn;
    }
}
