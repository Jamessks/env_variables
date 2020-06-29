<?php

use Dotenv\Dotenv;
//instantiate Dotenv object
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

//instantiate PDO object
$dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};port={$_ENV['DB_PORT']};charset={$_ENV['DB_CHARSET']}";
$dbuser = $_ENV['DB_USERNAME'];
$dbpass = $_ENV['DB_PASSWORD'];
$dboptions = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false];

return $pdo = new PDO($dsn,$dbuser,$dbpass,$dboptions);
