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
class PageTypeForm extends Form
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Text::class,
            'name' => 'controller'
        ])->add([
            'type' => Text::class,
            'name' => 'action'
        ])->add([
            'type' => Text::class,
            'name' => 'icon'
        ])->add([
            'type' => Text::class,
            'name' => 'title'
        ]);
    }
}
