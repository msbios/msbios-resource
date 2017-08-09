<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Route
 * @package MSBios\Resource\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="sys_t_routes")
 */
class Route
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
}
