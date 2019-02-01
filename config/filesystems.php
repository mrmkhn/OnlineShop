

<?php

return [

    'disks' => [

        'public' => [
            'driver' => 'local',
            'root'   => public_path() . '/uploads',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],

    ],
];

