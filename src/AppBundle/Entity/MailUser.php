<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailUser
 *
 * @ORM\Table(name="virtual_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MailUserRepository")
 */
class MailUser
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
     * @ORM\Column(name="email", type="string", length=120, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=106)
     */
    private $password;

    /**
     * @var MailDomain
     *
     * @ORM\ManyToOne(targetEntity="MailDomain", inversedBy="mailUsers")
     * @ORM\JoinColumn(name="domain_id", referencedColumnName="id")
     */
    private $domain;


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
     * Set email
     *
     * @param string $email
     *
     * @return MailUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return MailUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get domain
     *
     * @return \AppBundle\Entity\MailDomain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set domain
     *
     * @param \AppBundle\Entity\MailDomain $domain
     *
     * @return MailUser
     */
    public function setDomain(\AppBundle\Entity\MailDomain $domain = null)
    {
        $this->domain = $domain;

        return $this;
    }
}
