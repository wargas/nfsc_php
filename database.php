<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$DB = new Capsule;

$DB->addConnection([
    "driver" => $_ENV['DB_DRIVER'],
    "host" => $_ENV['DB_HOST'],
    "database" => $_ENV['DB_DATABASE'],
    "username" => $_ENV['DB_USERNAME'],
    "password" => $_ENV['DB_PASSWORD']
]);


$DB->setAsGlobal();



