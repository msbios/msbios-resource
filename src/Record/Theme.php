<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

use MSBios\Resource\Record;

/**
 * Class Theme
 * @package MSBios\Resource\Record
 */
class Theme extends Record implements TitleAwareInterface
{
    use TitleAwareTrait;

    /**
     * @var
     */
    private $template;

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }
}
