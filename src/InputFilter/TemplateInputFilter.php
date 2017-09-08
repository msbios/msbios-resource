<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class TemplateInputFilter
 * @package MSBios\Resource\InputFilter
 */
class TemplateInputFilter extends InputFilter
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
            'name' => 'template',
            'required' => true
        ]);
    }
}
