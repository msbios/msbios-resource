<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class RouteTableGateway
 * @package MSBios\Resource\Table
 */
class RouteTableGateway
{
    /** @var  TableGatewayInterface */
    protected $tableGateway;

    /**
     * RouteTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}
