<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Domain
 *
 * @ORM\Table(name="virtual_domain")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MailDomainRepository")
 */
class MailDomain
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, unique=true)
     */
    private $name;

    /**
     * @var MailUser[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MailUser", mappedBy="domain")
     */
    private $mailUsers;

    /**
     * @var MailAlias[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MailAlias", mappedBy="domain")
     */
    private $mailAliases;

    public function __construct()
    {
        $this->mailUsers = new ArrayCollection();
        $this->mailAliases = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return MailDomain
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
     * Add mailUser
     *
     * @param \AppBundle\Entity\MailUser $mailUser
     *
     * @return MailDomain
     */
    public function addMailUser(\AppBundle\Entity\MailUser $mailUser)
    {
        $this->mailUsers[] = $mailUser;

        return $this;
    }

    /**
     * Remove mailUser
     *
     * @param \AppBundle\Entity\MailUser $mailUser
     */
    public function removeMailUser(\AppBundle\Entity\MailUser $mailUser)
    {
        $this->mailUsers->removeElement($mailUser);
    }

    /**
     * Get mailUsers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMailUsers()
    {
        return $this->mailUsers;
    }

    /**
     * Add mailAlias
     *
     * @param \AppBundle\Entity\MailAlias $mailAlias
     *
     * @return MailDomain
     */
    public function addMailAlias(\AppBundle\Entity\MailAlias $mailAlias)
    {
        $this->mailAliases[] = $mailAlias;

        return $this;
    }

    /**
     * Remove mailAlias
     *
     * @param \AppBundle\Entity\MailAlias $mailAlias
     */
    public function removeMailAlias(\AppBundle\Entity\MailAlias $mailAlias)
    {
        $this->mailAliases->removeElement($mailAlias);
    }

    /**
     * Get mailAliases
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMailAliases()
    {
        return $this->mailAliases;
    }
}
