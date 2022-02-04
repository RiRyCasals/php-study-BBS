<?php

require_once('./6.php');

date_default_timezone_set('Asia/Tokyo');

$name = "test man";
$quantity = "14159";
$time = date("y/m/d h:m:s");

try {
    $sql = 'INSERT INTO f_exam(name, quantity, created_at) VALUES(:name, :quantity, :created_at);';
    $pre = $dbh->prepare($sql);

    $pre->bindValue(":name", $name);
    $pre->bindValue(":quantity", $quantity);
    $pre->bindValue(":created_at", $time);

    $r = $pre->execute();

} catch(\Throwable $e) {
    echo $e->getMessage();
}
