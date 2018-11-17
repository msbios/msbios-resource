<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource;

use Zend\Db\RowGateway\RowGatewayInterface;

/**
 * Interface Record
 * @package MSBios\Resource
 */
interface RecordInterface extends RowGatewayInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string|\Zend\Db\Sql\TableIdentifier
     */
    public function getTable();
}
