<?php

require_once(__DIR__.'/db.php');


$name = '(´･ω･`)';
$age = 2;
$registry_datetime = date('Y-m-d H:i:s');


$sql = 'INSERT INTO user(name, age, registry_datetime) VALUE(:name, :age, :registry_datetime);';
$pre = $dbh->prepare($sql);
var_dump($pre);


$pre->bindValue(':name', $name);
$pre->bindValue(':age', $age);
$pre->bindValue(':registry_datetime', $registry_datetime);


$r = $pre->execute();
var_dump($r);