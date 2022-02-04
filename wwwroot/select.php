<?php

require_once(__DIR__.'/db.php');


// prepared statement

$sql = 'SELECT * FROM int_2;';
$pre = $dbh->prepare($sql);
var_dump($pre);
echo "<br>\n";


// bind the value to placefolder
// pass


// execute SQL

$r = $pre-> execute();
var_dump($r);
echo "<br>\n";


// fetch data, show data

// $data = $pre->fetchAll();
// $data = $pre->fetchAll(PDO::FETCH_COLUM);
// $data = $pre->fetchAll(PDO::FETCH_NUM);
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
// $data = $pre->fetchAll(PDO::FETCH_BOTH);
foreach($data as $value){
    var_dump($value);
    echo "<br>\n";
}