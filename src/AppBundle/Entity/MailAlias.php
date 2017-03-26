<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailAlias
 *
 * @ORM\Table(name="virtual_alias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MailAliasRepository")
 */
class MailAlias
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
     * @ORM\Column(name="source", type="string", length=100)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=100)
     */
    private $destination;

    /**
     * @var MailDomain
     *
     * @ORM\ManyToOne(targetEntity="MailDomain", inversedBy="mailAliases")
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
     * Set source
     *
     * @param string $source
     *
     * @return MailAlias
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return MailAlias
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set domain
     *
     * @param \stdClass $domain
     *
     * @return MailAlias
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
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
}
