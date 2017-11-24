<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Feature;

/**
 * Interface TableProviderInterface
 * @package MSBios\Resource\Feature
 */
interface TableProviderInterface
{
    /**
     * @return mixed
     */
    public function getTableManagerConfig();
}
