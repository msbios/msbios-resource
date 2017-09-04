<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Form;

use MSBios\Resource\Initializer\LazyFormAwareInterface;
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
        //$this->add([
        //    'type' => Text::class,
        //    'name' => 'title'
        //])->add([
        //    'type' => Text::class,
        //    'name' => 'module'
        //]);
    }
}
