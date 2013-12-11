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

    public function __construct()
    {
        parent::__construct();
        $this->leagues = new ArrayCollection();
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

}