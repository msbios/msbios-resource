<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Resource\Record\Module;
use MSBios\Resource\RecordInterface;
use MSBios\Resource\Resources;
use MSBios\Resource\Table\ModuleTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ModuleTableGatewayFactory
 * @package MSBios\Resource\Factory
 */
class ModuleTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ModuleTableGateway|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var RecordInterface $record */
        $record = new Module('id', Resources::SYS_T_MODULES, $adapter);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature($record);

        return new ModuleTableGateway(
            new TableGateway($record->getTable(), $adapter, $feature)
        );
    }
}
