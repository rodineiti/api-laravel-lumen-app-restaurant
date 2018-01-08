<?php

/*
Client ID: 1
Client Secret: tYR2OEtbumYhv6C3rdPEeJX5oe3qNgiTILuQdxZQ
Password grant client created successfully.
Client ID: 2
Client Secret: HA650OJQ9kQPh8m8TsQHDtQr7bBvJ6os7rm9eaAO
Client ID: 3
Client Secret: 8fRS2K8uGs2Pj6RwoU8TgZs92FCQEbAUzXtS51kj
*/

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\User::class
        ]
    ]
];