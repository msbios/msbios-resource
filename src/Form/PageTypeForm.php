<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Form;

use MSBios\Resource\Initializer\LazyFormAwareInterface;
use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class ModuleForm
 * @package MSBios\Resource\Form
 */
class PageTypeForm extends Form implements LazyFormAwareInterface
{
    /**
     *
     */
    public function init()
    {
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
