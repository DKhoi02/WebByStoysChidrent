<?php

namespace Container3bvxyuC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YIMej_WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yIMej.w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yIMej.w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\BrandRepository',
        ]);
    }
}