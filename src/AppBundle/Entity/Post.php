<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * Many posts have one user
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var boolval
     *
     * @ORM\Column(name="reconciled", type="boolean")
     */
    private $reconciled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateGiven", type="datetime", nullable=true)
     */
    private $dateGiven;

    /**
     * @var string
     *
     * @ORM\Column(name="quoteContent", type="string", length=255, nullable=true)
     */
    private $quoteContent;

    /**
     * @var string
     *
     * @ORM\Column(name="quoteAttribution", type="string", length=255, nullable=true)
     */
    private $quoteAttribution;

    /**
     * @var string
     *
     * @ORM\Column(name="financialCurrency", type="string", length=10, nullable=true)
     */
    private $financialCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="financialValue", type="float", nullable=true)
     */
    private $financialValue;

    /**
     * @var string
     *
     * @ORM\Column(name="mediaURI", type="string", length=500, nullable=true)
     */
    private $mediaURI;

    /**
     * @var string
     *
     * @ORM\Column(name="locationName", type="string", length=255, nullable=true)
     */
    private $locationName;

    /**
     * @var string
     *
     * @ORM\Column(name="locationAddress", type="string", length=255, nullable=true)
     */
    private $locationAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="locationLatitude", type="string", length=255, nullable=true)
     */
    private $locationLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="locationLongitude", type="string", length=255, nullable=true)
     */
    private $locationLongitude;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * Many posts have many tags
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="posts")
     * @ORM\JoinTable(name="posts_tags")
     */
    private $tags;

    /**
     * Many posts can have one customer, allow nullable
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="posts")
     */
    private $customer;

    public function __construct()
    {
      // Many-To-Many stuff
      $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
      return (string)$this->id;
    }

    /**
     * Returns a formatted string representation of all tags associated with it
     */
    public function getTagString()
    {

      $tagNames = array();
      foreach ($this->getTags() as $tag)
      {
        array_push($tagNames, $tag->getName());
      }

      return implode(",", $tagNames);
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Post
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateGiven
     *
     * @param \DateTime $dateGiven
     *
     * @return Post
     */
    public function setDateGiven($dateGiven)
    {
        $this->dateGiven = $dateGiven;

        return $this;
    }

    /**
     * Get dateGiven
     *
     * @return \DateTime
     */
    public function getDateGiven()
    {
        return $this->dateGiven;
    }

    /**
     * Set quoteContent
     *
     * @param string $quoteContent
     *
     * @return Post
     */
    public function setQuoteContent($quoteContent)
    {
        $this->quoteContent = $quoteContent;

        return $this;
    }

    /**
     * Get quoteContent
     *
     * @return string
     */
    public function getQuoteContent()
    {
        return $this->quoteContent;
    }

    /**
     * Set quoteAttribution
     *
     * @param string $quoteAttribution
     *
     * @return Post
     */
    public function setQuoteAttribution($quoteAttribution)
    {
        $this->quoteAttribution = $quoteAttribution;

        return $this;
    }

    /**
     * Get quoteAttribution
     *
     * @return string
     */
    public function getQuoteAttribution()
    {
        return $this->quoteAttribution;
    }

    /**
     * Set financialCurrency
     *
     * @param string $financialCurrency
     *
     * @return Post
     */
    public function setFinancialCurrency($financialCurrency)
    {
        $this->financialCurrency = $financialCurrency;

        return $this;
    }

    /**
     * Get financialCurrency
     *
     * @return string
     */
    public function getFinancialCurrency()
    {
        return $this->financialCurrency;
    }

    /**
     * Set financialValue
     *
     * @param float $financialValue
     *
     * @return Post
     */
    public function setFinancialValue($financialValue)
    {
        $this->financialValue = $financialValue;

        return $this;
    }

    /**
     * Get financialValue
     *
     * @return float
     */
    public function getFinancialValue()
    {
        return $this->financialValue;
    }

    /**
     * Set mediaURI
     *
     * @param string $mediaURI
     *
     * @return Post
     */
    public function setMediaURI($mediaURI)
    {
        $this->mediaURI = $mediaURI;

        return $this;
    }

    /**
     * Get mediaURI
     *
     * @return string
     */
    public function getMediaURI()
    {
        return $this->mediaURI;
    }

    /**
     * Set locationName
     *
     * @param string $locationName
     *
     * @return Post
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Get locationName
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Set locationAddress
     *
     * @param string $locationAddress
     *
     * @return Post
     */
    public function setLocationAddress($locationAddress)
    {
        $this->locationAddress = $locationAddress;

        return $this;
    }

    /**
     * Get locationAddress
     *
     * @return string
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Set locationLatitude
     *
     * @param string $locationLatitude
     *
     * @return Post
     */
    public function setLocationLatitude($locationLatitude)
    {
        $this->locationLatitude = $locationLatitude;

        return $this;
    }

    /**
     * Get locationLatitude
     *
     * @return string
     */
    public function getLocationLatitude()
    {
        return $this->locationLatitude;
    }

    /**
     * Set locationLongitude
     *
     * @param string $locationLongitude
     *
     * @return Post
     */
    public function setLocationLongitude($locationLongitude)
    {
        $this->locationLongitude = $locationLongitude;

        return $this;
    }

    /**
     * Get locationLongitude
     *
     * @return string
     */
    public function getLocationLongitude()
    {
        return $this->locationLongitude;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
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
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return Post
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\Tag $tag
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return Post
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Post
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set reconciled
     *
     * @param boolean $reconciled
     *
     * @return Post
     */
    public function setReconciled($reconciled)
    {
        $this->reconciled = $reconciled;

        return $this;
    }

    /**
     * Get reconciled
     *
     * @return boolean
     */
    public function getReconciled()
    {
        return $this->reconciled;
    }
}
