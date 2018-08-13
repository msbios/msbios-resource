<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

use MSBios\Resource\Record;
use Zend\Db\RowGateway\RowGateway;

/**
 * Class Layout
 * @package MSBios\Resource\Record
 */
class Layout extends Record implements TitleAwareInterface
{
    use TitleAwareTrait;

    /**
     * @var
     */
    private $template;

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        $row = new RowGateway('', '');
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }
}
