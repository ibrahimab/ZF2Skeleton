<?php

return [
    'locale' => 'en_US',
    'translation_file_patterns' => [
        [
            'type'     => 'gettext',
            'base_dir' => MODULE_NAME\Module::PATH . '/locales',
            'pattern'  => '%s.mo',
        ],
    ],
];