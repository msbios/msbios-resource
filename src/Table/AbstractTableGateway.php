<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Table;

use MSBios\Resource\RecordRepositoryInterface;
use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class AbstractTableGateway
 * @package MSBios\Resource\Table
 */
abstract class AbstractTableGateway implements RecordRepositoryInterface
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
