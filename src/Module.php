<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 * @link https://zfmodules.com/ZendExperts/ZeDb
 */
namespace MSBios\Resource;

use Doctrine\ORM\EntityManager;
use MSBios\ModuleInterface;
use Zend\EventManager\EventInterface;
use Zend\EventManager\LazyListenerAggregate;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\Mvc\ApplicationInterface;
use Zend\Mvc\MvcEvent;
use Zend\ServiceManager\ServiceManager;

/**
 * Class Module
 * @package MSBios\Resource
 */
class Module implements
    ModuleInterface,
    BootstrapListenerInterface,
    AutoloaderProviderInterface
{
    const VERSION = '0.0.1';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Listen to the bootstrap event
     *
     * @param EventInterface $e
     * @return array
     */
    public function onBootstrap(EventInterface $e)
    {
//        /** @var ApplicationInterface $target */
//        $target = $e->getTarget();
//
//        /** @var ServiceManager $serviceManager */
//        $serviceManager = $target->getServiceManager();
//
//        /** @var  $platform */
//        $platform = $serviceManager
//            ->get(EntityManager::class)
//            ->getConnection()
//            ->getDatabasePlatform();
//
//        $platform->registerDoctrineTypeMapping('enum', 'string');
//        $platform->registerDoctrineTypeMapping('bit', 'boolean');

        // (new LazyListenerAggregate(
        //     $serviceManager->get(self::class)->get('listeners')->toArray(),
        //     $serviceManager
        // ))->attach($target->getEventManager());
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
