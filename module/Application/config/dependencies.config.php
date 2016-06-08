<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use Zend\Expressive\Helper;
use Application\Factory;
use Application\Page;
use Zend\Expressive;
use Zend\Router;

return [
    'invokables'            => [
        Expressive\Router\RouterInterface::class => Router\RouterFactory::class,
        Helper\ServerUrlHelper::class => Helper\ServerUrlHelper::class,
    ],
    'factories'             => [
        Page\ContactPage::class => Factory\PageFactory::class,
        
        Expressive\Template\TemplateRendererInterface::class => 
                Expressive\ZendView\ZendViewRendererFactory::class,
        
        Helper\UrlHelper::class                 => Helper\UrlHelperFactory::class,
        Helper\ServerUrlMiddleware::class       => Helper\ServerUrlMiddlewareFactory::class,
        Helper\UrlHelperMiddleware::class       => Helper\UrlHelperMiddlewareFactory::class,     
        Zend\View\HelperPluginManager::class    => Zend\Expressive\ZendView\HelperPluginManagerFactory::class,
        Zend\Expressive\FinalHandler::class     => Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
