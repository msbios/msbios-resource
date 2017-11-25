<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class SettingTableGateway
 * @package MSBios\Resource\Table
 */
class SettingTableGateway
{
    /** @var  TableGatewayInterface */
    protected $tableGateway;

    /**
     * SettingTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}