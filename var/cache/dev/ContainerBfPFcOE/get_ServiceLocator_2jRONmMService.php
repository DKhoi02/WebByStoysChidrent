<?php

namespace ContainerBfPFcOE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2jRONmMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2jRONmM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2jRONmM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartrepo' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
        ], [
            'cartrepo' => 'App\\Repository\\CartRepository',
        ]);
    }
}
