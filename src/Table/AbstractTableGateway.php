<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class AbstractTableGateway
 * @package MSBios\Resource\Table
 */
abstract class AbstractTableGateway
{
    /** @var TableGatewayInterface */
    protected $tableGateway;

    /**
     * AbstractTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}
