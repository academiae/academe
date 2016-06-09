<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map'          => [],
        'template_path_stack'   => [
            'application'   => __DIR__ . '/../view'
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [
       'layout'     => "application/layout",
        'map'       => [
            'application/layout'        => __DIR__ . '/../view/layout/layout.phtml'
        ],
        'paths'     => [
            'application'   => [__DIR__ . '/../view']
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
