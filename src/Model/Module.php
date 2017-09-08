<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Entity;

use MSBios\Stdlib\Object;

/**
 * Class Module
 * @package MSBios\Resource\Entity
 */
class Module extends Object
{
    /**
     * @var
     */
    private $title;

    /**
     * @var
     */
    private $module;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }
}
