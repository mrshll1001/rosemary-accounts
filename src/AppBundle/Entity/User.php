<?php

// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * Organisation's name, separate from the username
     * @ORM\Column(type="string", length=60, unique=true, nullable=true)
     */
    private $organisationName;

    /**
     * Organisation's description
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $organisationDescription;

    /**
     * Denotes whether or not a user has finished setting up their account
     * @ORM\Column(name="is_setup", type="boolean")
     */
    private $isSetup;

    /**
     * One user can have many customers
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="user")
     */
    private $customers;

    /**
     * One user can have their own set of many tags
     * @ORM\OneToMany(targetEntity="Tag", mappedBy="user")
     */
    private $tags;

    /**
     * One User has many posts
     * @ORM\OneToMany(targetEntity="Post", mappedBy="user")
     */
    private $posts;

    /**
     * One user has many app tokens
     * @ORM\OneToMany(targetEntity="AppToken", mappedBy="user")
     */
    private $appTokens;

    public function __construct()
    {
        // One-To-Many initialisation for customers
        $this->customers = new ArrayCollection();

        // OneToMany Initialistion for tags
        $this->tags = new ArrayCollection();

        // OneToMany Initialisation for PostRepository
        $this->posts = new ArrayCollection();

        //One-To-Many Initialisation for AppTokens
        $this->appTokens = new ArrayCollection();

        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPlainPassword()
    {
      return $this->plainPassword;
    }


    public function setPlainPassword($password)
    {
      $this->plainPassword = $password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return User
     */
    public function addCustomer(\AppBundle\Entity\Customer $customer)
    {
        $this->customers[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \AppBundle\Entity\Customer $customer
     */
    public function removeCustomer(\AppBundle\Entity\Customer $customer)
    {
        $this->customers->removeElement($customer);
    }

    /**
     * Get customers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * Add tag
     *
     * @param \AppBundle\Entity\Tag $tag
     *
     * @return User
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
     * Set isSetup
     *
     * @param boolean $isSetup
     *
     * @return User
     */
    public function setIsSetup($isSetup)
    {
        $this->isSetup = $isSetup;

        return $this;
    }

    /**
     * Get isSetup
     *
     * @return boolean
     */
    public function getIsSetup()
    {
        return $this->isSetup;
    }

    /**
     * Set organisationName
     *
     * @param string $organisationName
     *
     * @return User
     */
    public function setOrganisationName($organisationName)
    {
        $this->organisationName = $organisationName;

        return $this;
    }

    /**
     * Get organisationName
     *
     * @return string
     */
    public function getOrganisationName()
    {
        return $this->organisationName;
    }

    /**
     * Set organisationDescription
     *
     * @param string $organisationDescription
     *
     * @return User
     */
    public function setOrganisationDescription($organisationDescription)
    {
        $this->organisationDescription = $organisationDescription;

        return $this;
    }

    /**
     * Get organisationDescription
     *
     * @return string
     */
    public function getOrganisationDescription()
    {
        return $this->organisationDescription;
    }

    /**
     * Add post
     *
     * @param \AppBundle\Entity\Post $post
     *
     * @return User
     */
    public function addPost(\AppBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \AppBundle\Entity\Post $post
     */
    public function removePost(\AppBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Add appToken
     *
     * @param \AppBundle\Entity\AppToken $appToken
     *
     * @return User
     */
    public function addAppToken(\AppBundle\Entity\AppToken $appToken)
    {
        $this->appTokens[] = $appToken;

        return $this;
    }

    /**
     * Remove appToken
     *
     * @param \AppBundle\Entity\AppToken $appToken
     */
    public function removeAppToken(\AppBundle\Entity\AppToken $appToken)
    {
        $this->appTokens->removeElement($appToken);
    }

    /**
     * Get appTokens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAppTokens()
    {
        return $this->appTokens;
    }
}
