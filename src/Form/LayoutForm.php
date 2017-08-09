<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Form;

use Zend\Form\Element\Text;
use Zend\Form\Form;

/**
 * Class LayoutForm
 * @package MSBios\Resource\Form
 */
class LayoutForm extends Form
{
    /**
     * UserForm constructor.
     * @param int|null|string $name
     * @param array $options
     */
    public function __construct($name = __CLASS__, array $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'type' => Text::class,
            'name' => 'title'
        ]);

        $this->add([
            'type' => Text::class,
            'name' => 'template'
        ]);
    }
}
