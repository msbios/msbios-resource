<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource\Record;

use MSBios\Resource\RecordInterface;

/**
 * Trait TitleAwareTrait
 * @package MSBios\Resource\Record
 */
trait TitleAwareTrait
{
    /**
     * @var
     */
    private $title;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        if ($this instanceof RecordInterface) {
            return $this['title'];
        }

        return $this->title;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        if ($this instanceof RecordInterface) {
            $this['title'] = $title;
        } else {
            $this->title = $title;
        }

        return $this;
    }
}
