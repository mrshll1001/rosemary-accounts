<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaReference
 *
 * @ORM\Table(name="media_reference")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaReferenceRepository")
 */
class MediaReference
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
     * @ORM\Column(name="filehash", type="string", length=500, unique=true)
     */
    private $filehash;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=500, unique=true)
     */
    private $url;


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
     * Set filehash
     *
     * @param string $filehash
     *
     * @return MediaReference
     */
    public function setFilehash($filehash)
    {
        $this->filehash = $filehash;

        return $this;
    }

    /**
     * Get filehash
     *
     * @return string
     */
    public function getFilehash()
    {
        return $this->filehash;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return MediaReference
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}

