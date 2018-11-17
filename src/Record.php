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
     * @return mixed
     */
    public function getId()
    {
        foreach ($this->primaryKeyColumn as $pkColumnName) {
            return $this[$pkColumnName];
        }
    }

    /**
     * @return string|\Zend\Db\Sql\TableIdentifier
     */
    public function getTable()
    {
        return $this->table;
    }
}
