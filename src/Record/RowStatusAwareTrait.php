<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

/**
 * Trait RowStatusAwareTrait
 * @package MSBios\Resource\Record
 */
trait RowStatusAwareTrait
{
    /**
     * @var bool
     */
    private $rowStatus = true;

    /**
     * @return bool
     */
    public function isRowStatus()
    {
        return $this->rowStatus;
    }

    /**
     * @param bool $rowStatus
     */
    public function setRowStatus($rowStatus)
    {
        $this->rowStatus = $rowStatus;
    }
}
