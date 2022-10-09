<?php

namespace ContainerBkxhcxe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Lxu3CGCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lxu3CGC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lxu3CGC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orepo' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\OrderDetailRepository', 'getOrderDetailRepositoryService', true],
        ], [
            'orepo' => 'App\\Repository\\OrderRepository',
            'repo' => 'App\\Repository\\OrderDetailRepository',
        ]);
    }
}
