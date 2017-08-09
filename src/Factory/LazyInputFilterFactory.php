<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Resource\InputFilter\LazyInputFilterInterface;
use MSBios\Resource\Module;
use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LazyInputFilterFactory
 * @package MSBios\Resource\Factory
 */
class LazyInputFilterFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Form
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var InputFilter $inputFilter */
        $inputFilter = new $requestedName();

        if ($inputFilter instanceof LazyInputFilterInterface) {

            /** @var \Zend\Config\Config $options */
            $options = $container->get(Module::class)
                ->get('input_filters')
                ->get($requestedName);

            if (! is_null($options)) {
                /** @var \Zend\Config\Config $option */
                foreach ($options as $option) {
                    $inputFilter->add($option);
                }
            }
        }

        return $inputFilter;
    }
}
