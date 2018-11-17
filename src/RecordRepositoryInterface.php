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
     * @param RecordInterface $object
     * @return mixed
     */
    public function save(RecordInterface $object);

    /**
     * @param $where
     * @return mixed
     */
    public function delete($where);
}
