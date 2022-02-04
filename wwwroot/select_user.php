<?php

require_once(__DIR__.'/db.php');


$sql = 'SELECT * FROM user;';
$pre = $dbh->prepare($sql);
var_dump($pre);


$r = $pre->execute();
var_dump($r);


$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $value){
    var_dump($value);
    echo "<br>\n";
}