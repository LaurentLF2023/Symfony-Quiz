<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditProfileControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EditProfileController' shared autowired service.
     *
     * @return \App\Controller\EditProfileController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EditProfileController.php';

        $container->services['App\\Controller\\EditProfileController'] = $instance = new \App\Controller\EditProfileController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Security\\EmailVerifier'] ?? $container->load('getEmailVerifierService')));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EditProfileController', $container));

        return $instance;
    }
}