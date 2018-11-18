<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

use MSBios\Resource\Record;

/**
 * Class Module
 * @package MSBios\Resource\Record
 */
class Module extends Record implements TitleAwareInterface
{
    use TitleAwareTrait;

    /**
     * @return mixed
     */
    public function getModule()
    {
        return $this['module'];
    }

    /**
     * @param $module
     * @return $this
     */
    public function setModule($module)
    {

        $this['module'] = $module;
        return $this;
    }
}
