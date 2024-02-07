<?php

namespace ContainerQJu6ESW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZvMi11VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZvMi11V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZvMi11V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\GeneroController::delete' => ['privates', '.service_locator.65ugF8s', 'get_ServiceLocator_65ugF8sService', true],
            'App\\Controller\\GeneroController::edit' => ['privates', '.service_locator.65ugF8s', 'get_ServiceLocator_65ugF8sService', true],
            'App\\Controller\\GeneroController::index' => ['privates', '.service_locator.VbbOKKL', 'get_ServiceLocator_VbbOKKLService', true],
            'App\\Controller\\GeneroController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GeneroController::show' => ['privates', '.service_locator.ITzg_le', 'get_ServiceLocator_ITzgLeService', true],
            'App\\Controller\\JuegoController::delete' => ['privates', '.service_locator.d4qBJN9', 'get_ServiceLocator_D4qBJN9Service', true],
            'App\\Controller\\JuegoController::edit' => ['privates', '.service_locator.d4qBJN9', 'get_ServiceLocator_D4qBJN9Service', true],
            'App\\Controller\\JuegoController::index' => ['privates', '.service_locator.yYxWLqA', 'get_ServiceLocator_YYxWLqAService', true],
            'App\\Controller\\JuegoController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\JuegoController::show' => ['privates', '.service_locator.RnT3SSH', 'get_ServiceLocator_RnT3SSHService', true],
            'App\\Controller\\RolesUsuarioController::delete' => ['privates', '.service_locator.uCgzVkc', 'get_ServiceLocator_UCgzVkcService', true],
            'App\\Controller\\RolesUsuarioController::edit' => ['privates', '.service_locator.uCgzVkc', 'get_ServiceLocator_UCgzVkcService', true],
            'App\\Controller\\RolesUsuarioController::index' => ['privates', '.service_locator.1bnhOgb', 'get_ServiceLocator_1bnhOgbService', true],
            'App\\Controller\\RolesUsuarioController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RolesUsuarioController::show' => ['privates', '.service_locator.H59uUJx', 'get_ServiceLocator_H59uUJxService', true],
            'App\\Controller\\UsuarioController::delete' => ['privates', '.service_locator.aeGeJQa', 'get_ServiceLocator_AeGeJQaService', true],
            'App\\Controller\\UsuarioController::edit' => ['privates', '.service_locator.aeGeJQa', 'get_ServiceLocator_AeGeJQaService', true],
            'App\\Controller\\UsuarioController::index' => ['privates', '.service_locator.1.181F_', 'get_ServiceLocator_1_181FService', true],
            'App\\Controller\\UsuarioController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UsuarioController::show' => ['privates', '.service_locator.zjjydGR', 'get_ServiceLocator_ZjjydGRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\GeneroController:delete' => ['privates', '.service_locator.65ugF8s', 'get_ServiceLocator_65ugF8sService', true],
            'App\\Controller\\GeneroController:edit' => ['privates', '.service_locator.65ugF8s', 'get_ServiceLocator_65ugF8sService', true],
            'App\\Controller\\GeneroController:index' => ['privates', '.service_locator.VbbOKKL', 'get_ServiceLocator_VbbOKKLService', true],
            'App\\Controller\\GeneroController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\GeneroController:show' => ['privates', '.service_locator.ITzg_le', 'get_ServiceLocator_ITzgLeService', true],
            'App\\Controller\\JuegoController:delete' => ['privates', '.service_locator.d4qBJN9', 'get_ServiceLocator_D4qBJN9Service', true],
            'App\\Controller\\JuegoController:edit' => ['privates', '.service_locator.d4qBJN9', 'get_ServiceLocator_D4qBJN9Service', true],
            'App\\Controller\\JuegoController:index' => ['privates', '.service_locator.yYxWLqA', 'get_ServiceLocator_YYxWLqAService', true],
            'App\\Controller\\JuegoController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\JuegoController:show' => ['privates', '.service_locator.RnT3SSH', 'get_ServiceLocator_RnT3SSHService', true],
            'App\\Controller\\RolesUsuarioController:delete' => ['privates', '.service_locator.uCgzVkc', 'get_ServiceLocator_UCgzVkcService', true],
            'App\\Controller\\RolesUsuarioController:edit' => ['privates', '.service_locator.uCgzVkc', 'get_ServiceLocator_UCgzVkcService', true],
            'App\\Controller\\RolesUsuarioController:index' => ['privates', '.service_locator.1bnhOgb', 'get_ServiceLocator_1bnhOgbService', true],
            'App\\Controller\\RolesUsuarioController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\RolesUsuarioController:show' => ['privates', '.service_locator.H59uUJx', 'get_ServiceLocator_H59uUJxService', true],
            'App\\Controller\\UsuarioController:delete' => ['privates', '.service_locator.aeGeJQa', 'get_ServiceLocator_AeGeJQaService', true],
            'App\\Controller\\UsuarioController:edit' => ['privates', '.service_locator.aeGeJQa', 'get_ServiceLocator_AeGeJQaService', true],
            'App\\Controller\\UsuarioController:index' => ['privates', '.service_locator.1.181F_', 'get_ServiceLocator_1_181FService', true],
            'App\\Controller\\UsuarioController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UsuarioController:show' => ['privates', '.service_locator.zjjydGR', 'get_ServiceLocator_ZjjydGRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\GeneroController::delete' => '?',
            'App\\Controller\\GeneroController::edit' => '?',
            'App\\Controller\\GeneroController::index' => '?',
            'App\\Controller\\GeneroController::new' => '?',
            'App\\Controller\\GeneroController::show' => '?',
            'App\\Controller\\JuegoController::delete' => '?',
            'App\\Controller\\JuegoController::edit' => '?',
            'App\\Controller\\JuegoController::index' => '?',
            'App\\Controller\\JuegoController::new' => '?',
            'App\\Controller\\JuegoController::show' => '?',
            'App\\Controller\\RolesUsuarioController::delete' => '?',
            'App\\Controller\\RolesUsuarioController::edit' => '?',
            'App\\Controller\\RolesUsuarioController::index' => '?',
            'App\\Controller\\RolesUsuarioController::new' => '?',
            'App\\Controller\\RolesUsuarioController::show' => '?',
            'App\\Controller\\UsuarioController::delete' => '?',
            'App\\Controller\\UsuarioController::edit' => '?',
            'App\\Controller\\UsuarioController::index' => '?',
            'App\\Controller\\UsuarioController::new' => '?',
            'App\\Controller\\UsuarioController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\GeneroController:delete' => '?',
            'App\\Controller\\GeneroController:edit' => '?',
            'App\\Controller\\GeneroController:index' => '?',
            'App\\Controller\\GeneroController:new' => '?',
            'App\\Controller\\GeneroController:show' => '?',
            'App\\Controller\\JuegoController:delete' => '?',
            'App\\Controller\\JuegoController:edit' => '?',
            'App\\Controller\\JuegoController:index' => '?',
            'App\\Controller\\JuegoController:new' => '?',
            'App\\Controller\\JuegoController:show' => '?',
            'App\\Controller\\RolesUsuarioController:delete' => '?',
            'App\\Controller\\RolesUsuarioController:edit' => '?',
            'App\\Controller\\RolesUsuarioController:index' => '?',
            'App\\Controller\\RolesUsuarioController:new' => '?',
            'App\\Controller\\RolesUsuarioController:show' => '?',
            'App\\Controller\\UsuarioController:delete' => '?',
            'App\\Controller\\UsuarioController:edit' => '?',
            'App\\Controller\\UsuarioController:index' => '?',
            'App\\Controller\\UsuarioController:new' => '?',
            'App\\Controller\\UsuarioController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
