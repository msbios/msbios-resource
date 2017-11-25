<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class ThemeTableGateway
 * @package MSBios\Resource\Table
 */
class ThemeTableGateway
{
    /** @var  TableGatewayInterface */
    protected $tableGateway;

    /**
     * ThemeTableGateway constructor.
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}
