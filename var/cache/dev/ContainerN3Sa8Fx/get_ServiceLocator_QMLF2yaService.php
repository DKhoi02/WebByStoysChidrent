<?php

namespace ContainerN3Sa8Fx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QMLF2yaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QMLF2ya' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QMLF2ya'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartrepo' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'cdrepo' => ['privates', 'App\\Repository\\CartDetailRepository', 'getCartDetailRepositoryService', true],
            'orepo' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'prorepo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'reg' => ['services', 'doctrine', 'getDoctrineService', false],
            'urepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'cartrepo' => 'App\\Repository\\CartRepository',
            'cdrepo' => 'App\\Repository\\CartDetailRepository',
            'orepo' => 'App\\Repository\\OrderRepository',
            'prorepo' => 'App\\Repository\\ProductRepository',
            'reg' => '?',
            'urepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}