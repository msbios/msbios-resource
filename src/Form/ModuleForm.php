<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class ModuleForm
 * @package MSBios\Resource\Form
 */
class ModuleForm extends Form
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Text::class,
            'name' => 'title'
        ])->add([
            'type' => Text::class,
            'name' => 'module'
        ]);
    }
}
