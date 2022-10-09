<?php

namespace ContainerFPVybGh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FvAKUV2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FvAKUV2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FvAKUV2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartRepo' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'cartRepo' => 'App\\Repository\\CartRepository',
            'repo' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
