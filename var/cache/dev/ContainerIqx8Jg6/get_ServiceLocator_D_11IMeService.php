<?php

namespace ContainerIqx8Jg6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D_11IMeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d.11IMe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d.11IMe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\MainController::homepage' => ['privates', '.service_locator.8Hah0Dr.App\\Controller\\MainController::homepage()', 'getMainControllerhomepageService', true],
            'App\\Controller\\StarshipApiController::getCollection' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipApiController::getCollection()', 'getStarshipApiControllergetCollectionService', true],
            'App\\Controller\\StarshipApiController::get' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipApiController::get()', 'getStarshipApiControllergetService', true],
            'App\\Controller\\StarshipController::show' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipController::show()', 'getStarshipControllershowService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\MainController:homepage' => ['privates', '.service_locator.8Hah0Dr.App\\Controller\\MainController::homepage()', 'getMainControllerhomepageService', true],
            'App\\Controller\\StarshipApiController:getCollection' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipApiController::getCollection()', 'getStarshipApiControllergetCollectionService', true],
            'App\\Controller\\StarshipApiController:get' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipApiController::get()', 'getStarshipApiControllergetService', true],
            'App\\Controller\\StarshipController:show' => ['privates', '.service_locator.paf.Hl1.App\\Controller\\StarshipController::show()', 'getStarshipControllershowService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\MainController::homepage' => '?',
            'App\\Controller\\StarshipApiController::getCollection' => '?',
            'App\\Controller\\StarshipApiController::get' => '?',
            'App\\Controller\\StarshipController::show' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\MainController:homepage' => '?',
            'App\\Controller\\StarshipApiController:getCollection' => '?',
            'App\\Controller\\StarshipApiController:get' => '?',
            'App\\Controller\\StarshipController:show' => '?',
        ]);
    }
}
