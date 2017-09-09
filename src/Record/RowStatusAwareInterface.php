<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

/**
 * Interface RowStatusAwareInterface
 * @package MSBios\Resource\Record
 */
interface RowStatusAwareInterface
{
    /**
     * @return bool
     */
    public function isRowStatus();

    /**
     * @param bool $rowStatus
     */
    public function setRowStatus($rowStatus);
}
