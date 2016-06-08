<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'layout'                    => "application/layout",
        'template_map' => [
            'application/layout'        => __DIR__ . '/../view/layout/layout.phtml',
            'template/footer'           => __DIR__ . '/../view/layout/partial/footer.phtml',
            'template/navigation'       => __DIR__ . '/../view/layout/partial/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../view/layout/partial/breadcrumbs.phtml',
            'application/index/index'   => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'                 => __DIR__ . '/../view/error/404.phtml',
            'error/index'               => __DIR__ . '/../view/error/index.phtml',
            'contact'                   => __DIR__ . '/../view/page/contact.phtml'
        ],
        'template_path_stack' => [
//            'application'   => __DIR__ . '/../view',
            'page'          => __DIR__ . "/../view/page"
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'layout'                    => "application/layout",
        'map'       => [
            'application/layout'        => __DIR__ . '/../view/layout/layout.phtml',
            'template/footer'           => __DIR__ . '/../view/layout/partial/footer.phtml',
            'template/navigation'       => __DIR__ . '/../view/layout/partial/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../view/layout/partial/breadcrumbs.phtml',
            'application/index/index'   => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'                 => __DIR__ . '/../view/error/404.phtml',
            'error/index'               => __DIR__ . '/../view/error/index.phtml',
        ],
        'paths'     => [
            'page'  => [__DIR__ . '/../view/page'],
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
