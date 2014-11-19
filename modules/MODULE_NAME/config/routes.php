<?php

return [
    'home' => [
        'type'    => 'Literal',
        'options' => [
            'route'    => '/',
            'defaults' => [
                '__NAMESPACE__' => 'MODULE_NAME\Controller',
                'controller'    => 'MODULE_NAME\Controller\Home',
                'action'        => 'index',
            ],
        ],
    ],
];