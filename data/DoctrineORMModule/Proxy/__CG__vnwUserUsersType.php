<?php

namespace DoctrineORMModule\Proxy\__CG__\vnw\User;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UsersType extends \vnw\User\UsersType implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = ['Creator' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->Creator);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Admin', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Sn', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Name', 'Creator'];
        }

        return ['__isInitialized__', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Admin', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Sn', '' . "\0" . 'vnw\\User\\UsersType' . "\0" . 'Name'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UsersType $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->Creator);
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
    public function getAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin', []);

        return parent::getAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function getSn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSn', []);

        return parent::getSn();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin($Admin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin', [$Admin]);

        return parent::setAdmin($Admin);
    }

    /**
     * {@inheritDoc}
     */
    public function setSn($Sn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSn', [$Sn]);

        return parent::setSn($Sn);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($Name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$Name]);

        return parent::setName($Name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator($Creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$Creator]);

        return parent::setCreator($Creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastModified', []);

        return parent::getLastModified();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreation', []);

        return parent::getCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDeletable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDeletable', []);

        return parent::getIsDeletable();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($Active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$Active]);

        return parent::setActive($Active);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($Deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$Deleted]);

        return parent::setDeleted($Deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDeletable($isDeletable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDeletable', [$isDeletable]);

        return parent::setIsDeletable($isDeletable);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function onUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onUpdate', []);

        return parent::onUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function onPersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPersist', []);

        return parent::onPersist();
    }

}