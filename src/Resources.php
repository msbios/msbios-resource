<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource;

use MSBios\Stdlib\Enum;

/**
 * Class Resources
 * @package MSBios\Resource
 */
abstract class Resources extends Enum
{
    /** @const SYS_T_LAYOUTS */
    const SYS_T_LAYOUTS = 'sys_t_layouts';

    /** @const SYS_T_MODULES */
    const SYS_T_MODULES = 'sys_t_modules';
}
