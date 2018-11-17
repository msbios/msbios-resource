<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource;

use Zend\Db\RowGateway\RowGateway;

/**
 * Class Record
 * @package MSBios\Resource
 */
abstract class Record extends RowGateway implements RecordInterface
{
    /**
     * @return string|\Zend\Db\Sql\TableIdentifier
     */
    public function getTable()
    {
        return $this->table;
    }
}
