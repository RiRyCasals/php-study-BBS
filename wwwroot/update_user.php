<?php

require_once(__DIR__.'/db.php');


$id = 7;
$age = 2;


$sql = 'UPDATE user SET age=:age WHERE id=:id;';
$pre = $dbh->prepare($sql);
var_dump($pre);


$pre->bindValue(':id', $id);
$pre->bindValue(':age', $age);


$r = $pre->execute();
var_dump($r);