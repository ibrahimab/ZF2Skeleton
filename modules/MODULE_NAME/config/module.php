<?php

return [
    'router' => [
        'routes' => include_once MODULE_NAME\Module::PATH . '/config/routes.php',
    ],
    //'translator'      => include_once MODULE_NAME\Module::PATH . '/config/translator.php',
    'controllers'     => include_once MODULE_NAME\Module::PATH . '/config/controllers.php',
    'view_manager'    => include_once MODULE_NAME\Module::PATH . '/config/view_manager.php',
    'view_helpers'    => include_once MODULE_NAME\Module::PATH . '/config/view_helpers.php',
    // custom configuration
    'app'             => include_once MODULE_NAME\Module::PATH . '/config/app.php',
];