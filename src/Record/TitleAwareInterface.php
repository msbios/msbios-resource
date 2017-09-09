<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

/**
 * Interface TitleAwareInterface
 * @package MSBios\Resource\Record
 */
interface TitleAwareInterface
{
    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @param mixed $title
     */
    public function setTitle($title);
}
