<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fzzzq3WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fzzzq3W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fzzzq3W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.Fzzzq3W.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.Fzzzq3W": it references class "App\\Entity\\Question" but no such service exists.'],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'reponseRepository' => ['privates', 'App\\Repository\\ReponseRepository', 'getReponseRepositoryService', true],
        ], [
            'question' => 'App\\Entity\\Question',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'reponseRepository' => 'App\\Repository\\ReponseRepository',
        ]);
    }
}