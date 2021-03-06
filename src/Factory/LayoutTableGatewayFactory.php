<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Resource\Record\Layout;
use MSBios\Resource\RecordInterface;
use MSBios\Resource\Resources;
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
     * @return LayoutTableGateway|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var RecordInterface $record */
        $record = new Layout('id', Resources::SYS_T_LAYOUTS, $adapter);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature($record);

        return new LayoutTableGateway(
            new TableGateway($record->getTable(), $adapter, $feature)
        );
    }
}
