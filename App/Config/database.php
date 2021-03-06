<?php namespace Ignite\Config;

/* Database Configuration.
-- Ignite CMS uses Laravel's Eloquent ORM under the hood.
-- This configuration array represents exactly what is passed to the connection.
-- The default connection will be created using the details blow.

-- See the links below for more information
-- https://github.com/illuminate/database
-- https://laravel.com/docs/8.x
*/

return [
    'driver'    => 'sqlite',
    'host'      => 'localhost',
    'port'      => 3306,
    'username'  => 'root',
    'password'  => '',
    'database'  => 'ignite_db',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => 'ig_',
];