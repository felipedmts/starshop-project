<?php

namespace ContainerU8pQQvx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStarshipApiControllergetCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.paf.Hl1.App\Controller\StarshipApiController::getCollection()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.paf.Hl1.App\\Controller\\StarshipApiController::getCollection()'] = ($container->privates['.service_locator.paf.Hl1'] ?? $container->load('get_ServiceLocator_Paf_Hl1Service'))->withContext('App\\Controller\\StarshipApiController::getCollection()', $container);
    }
}
