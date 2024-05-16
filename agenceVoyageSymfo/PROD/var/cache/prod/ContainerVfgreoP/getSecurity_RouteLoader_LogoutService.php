<?php

namespace ContainerVfgreoP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_RouteLoader_LogoutService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.route_loader.logout' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.route_loader.logout'] = new \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader([], 'security.logout_uris');
    }
}
