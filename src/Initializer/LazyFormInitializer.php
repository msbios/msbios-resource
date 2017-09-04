<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource\Initializer;

use Interop\Container\ContainerInterface;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class LazyFormInitializer
 * @package MSBios\Resource\Initializer
 */
class LazyFormInitializer implements InitializerInterface
{

    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof LazyFormAwareInterface) {

            /** @var string $formName */
            $formName = get_class($instance);

            /** @var InputFilterPluginManager $inputFilterManager */
            $inputFilterManager = $container->get('InputFilterManager');
            if ($inputFilterManager->has($formName)) {
                $instance->setInputFilter(
                    $inputFilterManager->get($formName)
                );
            }

            /** @var \Zend\Hydrator\HydratorPluginManager $hydratorManager */
            $hydratorManager = $container->get('HydratorManager');
            if ($hydratorManager->has($formName)) {
                $instance->setHydrator(
                    $hydratorManager->get($formName)
                );
            }

        }
    }
}