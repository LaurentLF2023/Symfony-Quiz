<?php

namespace ContainerBplumtY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReponseTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReponseType' shared autowired service.
     *
     * @return \App\Form\ReponseType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ReponseType.php';

        return $container->privates['App\\Form\\ReponseType'] = new \App\Form\ReponseType();
    }
}
