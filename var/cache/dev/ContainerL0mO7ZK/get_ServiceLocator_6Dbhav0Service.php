<?php

namespace ContainerL0mO7ZK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6Dbhav0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6Dbhav0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6Dbhav0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\CandidatureRepository', 'getCandidatureRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\CandidatureRepository',
        ]);
    }
}
