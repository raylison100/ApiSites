<?php

use Illuminate\Support\Str;

return [
    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'mysql' => [
            'driver'                   => 'mysql',
            'url'                      => env('DATABASE_URL'),
            'host'                     => env('DB_HOST', '127.0.0.1'),
            'port'                     => env('DB_PORT', '3306'),
            'database'                 => env('DB_DATABASE', 'forge'),
            'username'                 => env('DB_USERNAME', 'forge'),
            'password'                 => env('DB_PASSWORD', ''),
            'unix_socket'              => env('DB_SOCKET', ''),
            'charset'                  => 'utf8mb4',
            'collation'                => 'utf8mb4_unicode_ci',
            'prefix'                   => '',
            'prefix_indexes'           => true,
            'strict'                   => true,
            'engine'                   => null,
            'options'                  => extension_loaded('pdo_mysql') ? array_filter([
            ]) : [],
        ],
    
        'pgsql' => [
            'driver'         => 'pgsql',
            'url'            => env('DATABASE_URL'),
            'host'           => env('DB_HOST'),
            'port'           => 5432,
            'database'       => env('DB_DATABASE'),
            'username'       => env('DB_USERNAME'),
            'password'       => env('DB_PASSWORD'),
            'charset'        => 'utf8',
            'prefix'         => '',
            'prefix_indexes' => true,
            'schema'         => env('DB_SCHEMA'),
            'sslmode'        => 'prefer',
        ],

        'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_URL', '127.0.0.1'),
            'port'     => env('MONGO_PORT'),
            'database' => env('MONGO_DATABASE'),
            'username' => env('MONGO_DB_USERNAME', ''),
            'password' => env('MONGO_DB_PASSWORD',''),
            'options'  => []
        ],
    ],
    'migrations' => 'migrations',
    'redis' => [

        'client' => env('REDIS_CLIENT', 'predis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'predis'),
            'prefix'  => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url'      => env('REDIS_URL'),
            'host'     => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port'     => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url'       => env('REDIS_URL'),
            'host'      => env('REDIS_HOST', '127.0.0.1'),
            'password'  => env('REDIS_PASSWORD', null),
            'port'      => env('REDIS_PORT', '6379'),
            'database'  => env('REDIS_CACHE_DB', '1'),
        ],
    ],
];
