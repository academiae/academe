<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map'          => [],
        'template_path_stack'   => [
            'application'   => __DIR__ . '/../templates'
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [
       'layout'     => "application/layout",
        'map'       => [],
        'paths'     => [
            'application'   => [__DIR__ . '/../templates']
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
