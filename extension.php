<?php

return [

    'main' => 'Knip\\Meta\\KnipMetaExtension',

    'autoload' => [

        'Knip\\Meta\\' => 'src'

    ],

    'resources' => [

        'export' => [
            'view' => 'views'
        ]

    ],

    'controllers' => 'src/Controller/*Controller.php',

    'settings' => [

        'system' => 'extension://KnipMeta/views/admin/settings.razr'

    ]

];
