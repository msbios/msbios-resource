<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Stdlib\Object;

/**
 * Class Entity
 *
 * SomeEntity can be extend this class
 *
 * @package MSBios\Resource
 * @ORM\MappedSuperclass
 */
abstract class Entity extends Object
{
}
