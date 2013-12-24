<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * @ORM\Entity
 * @ORM\Table(name="MetaLeagueUser")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ManyToMany(targetEntity="League", inversedBy="users")
     * @JoinTable(name="MetaLeagueUsersLeagues")
     **/
    protected $leagues;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="FantasyTeam", mappedBy="user")
     */
    private $teams;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdAt;

    public function __construct()
    {
        parent::__construct();
        $this->leagues   = new ArrayCollection();
        $this->teams     = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function addLeague(League $league)
    {
        $this->leagues[] = $league;
    }

    public function setEmail($email){
        $this->email = $email;
        $this->username = $email;
    }

    public function setEmailCanonical($emailCanonical){
        $this->emailCanonical = $emailCanonical;
        $this->usernameCanonical = $emailCanonical;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param ArrayCollection $leagues
     */
    public function setLeagues(ArrayCollection $leagues) {
        $this->leagues = $leagues;
    }

    /**
     * @return ArrayCollection
     */
    public function getLeagues() {
        return $this->leagues;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

}