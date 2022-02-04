<?php

$dsn = 'mysql:host=localhost;dbname=tech;charset=utf8mb4';
$user = 'tech';
$password = 'tech';
$options = [
    \PDO::ATTR_EMULATE_PREPARES => false,
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
];

try {
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    echo $e->getMessage();
    exit;
}
