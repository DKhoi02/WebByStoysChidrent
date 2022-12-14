<?php

namespace ContainerTjuDFrW;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vfv5RvyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vfv5Rvy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vfv5Rvy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'caderepo' => ['privates', 'App\\Repository\\CartDetailRepository', 'getCartDetailRepositoryService', true],
            'cartrepo' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'res' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'caderepo' => 'App\\Repository\\CartDetailRepository',
            'cartrepo' => 'App\\Repository\\CartRepository',
            'res' => '?',
        ]);
    }
}
