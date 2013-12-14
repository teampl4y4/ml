<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column as Column;

/**
 * FantasyTeamRosterSpot
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MetaLeague\FantasyBundle\Entity\FantasyTeamRosterRepositorySpot")
 */
class FantasyTeamRosterSpot
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
     * @var FantasyTeam
     *
     * @ORM\ManyToOne(targetEntity="FantasyTeam", inversedBy="rosterSpots")
     * @ORM\JoinColumn(name="fantasyTeam_id", referencedColumnName="id")
     */
    private $fantasyTeam;

    /**
     * @var ProPlayer
     *
     * @ORM\ManyToOne(targetEntity="ProPlayer", inversedBy="rosterSpots")
     * @ORM\JoinColumn(name="proPlayer_id", referencedColumnName="id")
     */
    private $proPlayer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isStarter", nullable=false)
     */
    private $isStarter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isLocked", nullable=false)
     */
    private $isLocked;

    public function __construct()
    {
        $this->isStarter = true;
        $this->isLocked  = false;
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
     * @param mixed $fantasyTeam
     */
    public function setFantasyTeam(FantasyTeam $fantasyTeam) {
        $this->fantasyTeam = $fantasyTeam;
    }

    /**
     * @return mixed
     */
    public function getFantasyTeam() {
        return $this->fantasyTeam;
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

    /**
     * @param boolean $isStarter
     */
    public function setIsStarter($isStarter) {
        $this->isStarter = $isStarter;
    }

    /**
     * @return boolean
     */
    public function getIsStarter() {
        return $this->isStarter;
    }

    /**
     * @param boolean $isLocked
     */
    public function setIsLocked($isLocked) {
        $this->isLocked = $isLocked;
    }

    /**
     * @return boolean
     */
    public function getIsLocked() {
        return $this->isLocked;
    }
    
}
