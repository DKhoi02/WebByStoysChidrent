<?php

namespace ContainerEZKtkqD;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JqpXhhXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jqpXhhX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jqpXhhX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'caderepo' => ['privates', 'App\\Repository\\CartDetailRepository', 'getCartDetailRepositoryService', true],
            'cartrepo' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'prorepo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'res' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'caderepo' => 'App\\Repository\\CartDetailRepository',
            'cartrepo' => 'App\\Repository\\CartRepository',
            'prorepo' => 'App\\Repository\\ProductRepository',
            'res' => '?',
        ]);
    }
}