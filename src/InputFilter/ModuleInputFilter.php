<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class ModuleInputFilter
 * @package MSBios\Resource\InputFilter
 */
class ModuleInputFilter extends InputFilter
{
    /**
     * TemplateInputFilter constructor.
     */
    public function __construct()
    {
        $this->add([
            'name' => 'title',
            'required' => true
        ])->add([
            'name' => 'module',
            'required' => true
        ]);
    }
}
