<?php

namespace ContainerVfgreoP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_QueryParameterValueResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.query_parameter_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.query_parameter_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver();
    }
}
