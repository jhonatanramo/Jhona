<?php

return [
    'defaults' => [
    'guard' => 'web-personal',
    'passwords' => 'personals',
],

'guards' => [
    'web-personal' => [
        'driver' => 'session',
        'provider' => 'personals',
    ],
],

'providers' => [
    'personals' => [
        'driver' => 'eloquent',
        'model' => App\Models\Personal::class,
    ],
],

'passwords' => [
    'personals' => [
        'provider' => 'personals',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
    ],
],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),
];