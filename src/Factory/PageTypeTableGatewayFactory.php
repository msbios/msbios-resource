<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Db\TableGateway\TableGateway;
use MSBios\Resource\Record\PageType;
use MSBios\Resource\RecordInterface;
use MSBios\Resource\Resources;
use MSBios\Resource\Table\PageTypeTableGateway;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class PageTypeTableGatewayFactory
 * @package MSBios\Resource\Factory
 */
class PageTypeTableGatewayFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PageTypeTableGateway|object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AdapterInterface $adapter */
        $adapter = $container->get(AdapterInterface::class);

        /** @var RecordInterface $record */
        $record = new PageType('id', Resources::SYS_T_MODULES, $adapter);

        /** @var RowGatewayFeature $feature */
        $feature = new RowGatewayFeature($record);

        return new PageTypeTableGateway(
            new TableGateway($record->getTable(), $adapter, $feature)
        );
    }
}
