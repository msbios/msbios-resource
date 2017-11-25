<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class PageTypeTableGateway
 * @package MSBios\Resource\Table
 */
class PageTypeTableGateway
{
    /** @var  TableGatewayInterface */
    protected $tableGateway;

    /**
     * PageTypeTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}
