<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . '/../../vendor/autoload.php';

// untuk membaca variable .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// membuat object dari class Manager
$capsule = new Capsule;

// membuat koneksi database, disini saya menggunakan postgres
$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USERNAME'],
    'password'  => $_ENV['DB_PASSWORD'],
    // 'host'      => getenv('DB_HOST'),
    // 'database'  => getenv('DB_DATABASE'),
    // 'username'  => getenv('DB_USERNAME'),
    // 'password'  => getenv('DB_PASSWORD'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
