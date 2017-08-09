<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use DoctrineModule\Stdlib\Hydrator\DoctrineObject;
use Interop\Container\ContainerInterface;
use MSBios\Resource\Module;
use Zend\Config\Config;
use Zend\Form\Form;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class AbstractFormFactory
 * @package MSBios\Resource\Factory
 */
class LazyFormFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Form
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var Form $form */
        $form = new $requestedName();

        /** @var Config $options */
        $options = $container->get(Module::class)
            ->get('forms')
            ->get($requestedName);

        /** @var \Zend\InputFilter\InputFilterPluginManager $inputFilterManager */
        $inputFilterManager = $container->get('InputFilterManager');
        if ($inputFilterClass = $options->get('input_filter_class')) {
            if ($inputFilterManager->has($inputFilterClass)) {
                $form->setInputFilter($inputFilterManager->get($inputFilterClass));
            }
        }

        /** @var \Zend\Hydrator\HydratorPluginManager $hydratorManager */
        $hydratorManager = $container->get('HydratorManager');
        if ($hydratorClass = $options->get('hydrator_class')) {
            if ($hydratorManager->has($hydratorClass)) {
                $form->setHydrator($hydratorManager->get($hydratorClass));
            }
        }

        /** @var string $resourceClass */
        if ($resourceClass = $options->get('resource_class')) {
            if (class_exists($resourceClass)) {
                $form->setObject(new $resourceClass());
            }
        }

        return $form;
    }
}
