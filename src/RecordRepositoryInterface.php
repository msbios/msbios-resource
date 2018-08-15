<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource;

use MSBios\Resource\Exception\RowNotFoundException;
use Zend\Paginator\Paginator;
use Zend\Stdlib\ArrayObject;

/**
 * Interface RecordRepositoryInterface
 * @package MSBios\Resource
 */
interface RecordRepositoryInterface
{
    /**
     * @param $id
     * @return ArrayObject
     * @throws RowNotFoundException
     */
    public function fetch($id);

    /**
     * @param null $where
     * @param null $order
     * @param null $group
     * @param null $having
     * @return Paginator
     */
    public function fetchAll($where = null, $order = null, $group = null, $having = null);

    /**
     * @param ArrayObject $object
     * @return int
     * @throws \Exception
     */
    public function save(ArrayObject $object);

    /**
     * @param $id
     * @return int
     */
    public function delete($id);
}
