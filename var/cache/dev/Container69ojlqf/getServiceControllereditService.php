<?php

namespace Container69ojlqf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2EH4CAq.App\Controller\ServiceController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2EH4CAq.App\\Controller\\ServiceController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.2EH4CAq.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.2EH4CAq": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'service' => 'App\\Entity\\Service',
            'em' => '?',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\ServiceController::edit()', $container);
    }
}