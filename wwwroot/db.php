<?php

// dsn = dmain source name
$dsn = 'mysql:host=localhost;dbname=tech;charset=utf8mb4';
$user = 'tech';
$password = 'tech';
$options = [
    \PDO::ATTR_EMULATE_PREPARES => false, //静的プレースフォルダにする
    \PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, // 複文を禁止する
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, // エラー時に例外を投げる
];

try {
    $dbh = new PDO($dsn, $user, $password, $options);
}catch(\PDOException $e){
    echo "Error\n";
    echo $e->getMessage();
    exit;
}

var_dump($dbh);