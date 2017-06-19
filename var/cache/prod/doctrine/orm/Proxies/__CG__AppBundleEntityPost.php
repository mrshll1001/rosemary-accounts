<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \AppBundle\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'reconciled', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'dateCreated', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'dateGiven', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'quoteContent', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'quoteAttribution', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'financialCurrency', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'financialValue', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'mediaURI', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationName', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationAddress', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationLatitude', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationLongitude', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'tags', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'customer'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'user', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'reconciled', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'dateCreated', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'dateGiven', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'quoteContent', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'quoteAttribution', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'financialCurrency', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'financialValue', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'mediaURI', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationName', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationAddress', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationLatitude', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'locationLongitude', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'tags', '' . "\0" . 'AppBundle\\Entity\\Post' . "\0" . 'customer'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Post $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateGiven($dateGiven)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateGiven', [$dateGiven]);

        return parent::setDateGiven($dateGiven);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateGiven()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateGiven', []);

        return parent::getDateGiven();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuoteContent($quoteContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuoteContent', [$quoteContent]);

        return parent::setQuoteContent($quoteContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuoteContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuoteContent', []);

        return parent::getQuoteContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuoteAttribution($quoteAttribution)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuoteAttribution', [$quoteAttribution]);

        return parent::setQuoteAttribution($quoteAttribution);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuoteAttribution()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuoteAttribution', []);

        return parent::getQuoteAttribution();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinancialCurrency($financialCurrency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinancialCurrency', [$financialCurrency]);

        return parent::setFinancialCurrency($financialCurrency);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinancialCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinancialCurrency', []);

        return parent::getFinancialCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setFinancialValue($financialValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinancialValue', [$financialValue]);

        return parent::setFinancialValue($financialValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinancialValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinancialValue', []);

        return parent::getFinancialValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setMediaURI($mediaURI)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMediaURI', [$mediaURI]);

        return parent::setMediaURI($mediaURI);
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaURI()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaURI', []);

        return parent::getMediaURI();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationName($locationName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationName', [$locationName]);

        return parent::setLocationName($locationName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationName', []);

        return parent::getLocationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationAddress($locationAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationAddress', [$locationAddress]);

        return parent::setLocationAddress($locationAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationAddress', []);

        return parent::getLocationAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationLatitude($locationLatitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationLatitude', [$locationLatitude]);

        return parent::setLocationLatitude($locationLatitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationLatitude', []);

        return parent::getLocationLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationLongitude($locationLongitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationLongitude', [$locationLongitude]);

        return parent::setLocationLongitude($locationLongitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationLongitude', []);

        return parent::getLocationLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\AppBundle\Entity\Tag $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\AppBundle\Entity\Tag $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setReconciled($reconciled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReconciled', [$reconciled]);

        return parent::setReconciled($reconciled);
    }

    /**
     * {@inheritDoc}
     */
    public function getReconciled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReconciled', []);

        return parent::getReconciled();
    }

}
