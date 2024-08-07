<?php

namespace Container69ojlqf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zi8CzdA.App\Controller\AnimalController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zi8CzdA.App\\Controller\\AnimalController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.zi8CzdA.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.zi8CzdA": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'em' => '?',
            'slugger' => '?',
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
        ]))->withContext('App\\Controller\\AnimalController::edit()', $container);
    }
}
