<?php

namespace ContainerQCaZ7S4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormFactory.php';

        return $container->privates['form.factory'] = new \Symfony\Component\Form\FormFactory(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')));
    }
}
