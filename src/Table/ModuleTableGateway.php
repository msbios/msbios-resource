<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class ModuleTableGateway
 * @package MSBios\Resource\Table
 */
class ModuleTableGateway
{
    /** @var  TableGatewayInterface */
    protected $tableGateway;

    /**
     * ModuleTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}
