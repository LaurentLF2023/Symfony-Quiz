<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuestionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\QuestionType' shared autowired service.
     *
     * @return \App\Form\QuestionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/QuestionType.php';

        return $container->privates['App\\Form\\QuestionType'] = new \App\Form\QuestionType();
    }
}
