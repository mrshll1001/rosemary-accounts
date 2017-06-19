<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UploadedFile
 *
 * @ORM\Table(name="uploaded_file")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UploadedFileRepository")
 */
class UploadedFile
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
     * @ORM\Column(name="filehash", type="string", length=255, unique=true)
     */
    private $filehash;

    /**
     * @var string
     *
     * @ORM\Column(name="filepath", type="string", length=300, unique=true)
     */
    private $filepath;


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
     * @return UploadedFile
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
     * Set filepath
     *
     * @param string $filepath
     *
     * @return UploadedFile
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }
}

