<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Resource\Record\Layout;
use MSBios\Resource\Table\LayoutTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LayoutTableGatewayFactory
 * @package MSBios\Resource\Factory
 */
class LayoutTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return LayoutTableGateway
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature(new Layout($adapter));

        return new LayoutTableGateway(
            new TableGateway('sys_t_layouts', $adapter, $feature)
        );
    }
}
