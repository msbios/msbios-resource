<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

use MSBios\Resource\RecordInterface;

/**
 * Trait RowStatusAwareTrait
 * @package MSBios\Resource\Record
 */
trait RowStatusAwareTrait
{
    /** @var bool */
    private $rowStatus = true;

    /**
     * @return bool
     */
    public function isRowStatus()
    {
        if ($this instanceof RecordInterface) {
            return $this['rowstatus'];
        }

        return $this->rowStatus;
    }

    /**
     * @param $rowStatus
     * @return $this
     */
    public function setRowStatus($rowStatus)
    {
        if ($this instanceof RecordInterface) {
            $this['rowstatus'] = $rowStatus;
        } else {
            $this->rowStatus = $rowStatus;
        }

        return $this;
    }
}
