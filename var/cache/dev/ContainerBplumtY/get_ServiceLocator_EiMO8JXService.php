<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EiMO8JXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EiMO8JX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EiMO8JX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'quizz' => ['privates', '.errored..service_locator.EiMO8JX.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.EiMO8JX": it references class "App\\Entity\\Categorie" but no such service exists.'],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'doctrine' => '?',
            'quizz' => 'App\\Entity\\Categorie',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}