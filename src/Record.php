<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource;

use MSBios\Stdlib\AbstractObject;
use Zend\Db\Adapter\AdapterInterface;

/**
 * Class Record
 * @package MSBios\Resource
 */
abstract class Record extends AbstractObject implements RecordInterface
{
    /** @var AdapterInterface */
    protected $adapter;

    /**
     * Record constructor.
     * @param AdapterInterface|null $adapter
     */
    public function __construct(AdapterInterface $adapter = null)
    {
        $this->adapter = $adapter;
        parent::__construct();
    }
}
