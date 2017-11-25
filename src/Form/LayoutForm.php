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
 * Class LayoutForm
 * @package MSBios\Resource\Form
 */
class LayoutForm extends Form
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
            'name' => 'template'
        ]);
    }
}
