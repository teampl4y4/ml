<?php

namespace MetaLeague\FantasyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * LeagueInvite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LeagueInvite
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
     * @ORM\Column(name="toEmail", type="string", length=255)
     */
    private $toEmail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiresOn", type="datetime")
     */
    private $expiresOn;

    /**
     * @var string
     *
     * @ORM\Column(name="inviteCode", type="string", length=255)
     */
    private $inviteCode;

    /**
     * @var League
     *
     * @ORM\ManyToOne(targetEntity="League", inversedBy="invites")
     */
    private $league;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="createdBy", referencedColumnName="id")
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="isAccepted", type="boolean")
     */
    private $isAccepted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt  = new \DateTime();
        $this->expiresOn  = new \DateTime('+7 days');
        $this->isAccepted = false;
        $this->generateInviteCode();
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
     * Set toEmail
     *
     * @param string $toEmail
     * @return LeagueInvite
     */
    public function setToEmail($toEmail)
    {
        $this->toEmail = $toEmail;

        return $this;
    }

    /**
     * Get toEmail
     *
     * @return string 
     */
    public function getToEmail()
    {
        return $this->toEmail;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return LeagueInvite
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

    /**
     * Set inviteCode
     *
     * @param string $inviteCode
     * @return LeagueInvite
     */
    public function setInviteCode($inviteCode)
    {
        $this->inviteCode = $inviteCode;

        return $this;
    }

    /**
     * Get inviteCode
     *
     * @return string 
     */
    public function getInviteCode()
    {
        return $this->inviteCode;
    }

    public function generateInviteCode()
    {
        $randomCode = '';
        for ($i = 0; $i < 11; $i++) {
            $randomCode .= chr(rand(ord('a'), ord('z')));
        }

        $this->inviteCode = $randomCode;
        return $this->inviteCode;
    }

    /**
     * Set isAccepted
     *
     * @param string $isAccepted
     * @return LeagueInvite
     */
    public function setIsAccepted($isAccepted)
    {
        $this->isAccepted = $isAccepted;

        return $this;
    }

    /**
     * Get isAccepted
     *
     * @return string 
     */
    public function getIsAccepted()
    {
        return $this->isAccepted;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\User $league
     */
    public function setLeague(League $league) {
        $this->league = $league;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\User
     */
    public function getLeague() {
        return $this->league;
    }

    /**
     * @param \DateTime $expiresOn
     */
    public function setExpiresOn($expiresOn) {
        $this->expiresOn = $expiresOn;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresOn() {
        return $this->expiresOn;
    }

    /**
     * @param \MetaLeague\FantasyBundle\Entity\User $createdBy
     */
    public function setCreatedBy(User $createdBy) {
        $this->createdBy = $createdBy;
    }

    /**
     * @return \MetaLeague\FantasyBundle\Entity\User
     */
    public function getCreatedBy() {
        return $this->createdBy;
    }


}
