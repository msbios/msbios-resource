<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Entity;

use MSBios\Stdlib\Object;

/**
 * Class Session
 * @package MSBios\Resource\Entity
 */
class Session extends Object
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $value;

    /**
     * @var
     */
    private $modified;

    /**
     * @var
     */
    private $lifetime;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * @param mixed $lifetime
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;
        return $this;
    }
}
