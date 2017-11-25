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
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'name' => 'title',
            'required' => true
        ])->add([
            'name' => 'module',
            'required' => true
        ]);
    }
}
