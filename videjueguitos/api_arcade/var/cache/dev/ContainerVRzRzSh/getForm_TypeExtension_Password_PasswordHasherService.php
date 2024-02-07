<?php

namespace ContainerVRzRzSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Password_PasswordHasherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.password.password_hasher' shared service.
     *
     * @return \Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'PasswordHasher'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'PasswordTypePasswordHasherExtension.php';

        return $container->privates['form.type_extension.password.password_hasher'] = new \Symfony\Component\Form\Extension\PasswordHasher\Type\PasswordTypePasswordHasherExtension(($container->privates['form.listener.password_hasher'] ?? $container->load('getForm_Listener_PasswordHasherService')));
    }
}
