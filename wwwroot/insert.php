<?php

require_once(__DIR__.'/db.php');

//get items (example... _POST)
$num1 = 314159265;
$num2 = 271828182;


// prepared statement
$sql = 'INSERT INTO int_2(num1, num2) VALUES( :num1, :num2);';
$pre = $dbh->prepare($sql);
var_dump($pre);


// bind the value to placefolder
$pre->bindValue(':num1', $num1);
$pre->bindValue(':num2', $num2);


// execute SQL
$r = $pre->execute();
var_dump($r);