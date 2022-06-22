<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B7bfI8KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b7bfI8K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b7bfI8K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.b7bfI8K.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.b7bfI8K": it references class "App\\Entity\\Question" but no such service exists.'],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
        ], [
            'question' => 'App\\Entity\\Question',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
        ]);
    }
}