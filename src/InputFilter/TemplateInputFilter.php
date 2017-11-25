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
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'name' => 'title',
            'required' => true
        ])->add([
            'name' => 'template',
            'required' => true
        ]);
    }
}
