<?php

var_dump( 1 == 1);
var_dump( 1 === 1);
var_dump( 1 > 2);
var_dump( 1 < 2);
var_dump( 1 > 1);
var_dump( 1 >= 1);
echo "<br>\n";

//NULL結合演算子
$awk = [
    'key' => 'val',
];  

$s = $awk['key'];
var_dump($s);
echo "<br>\n";

$s2 = $awk['no_key'];
var_dump($s2);
echo "<br>\n";

$s3 = $awk['no_key'] ?? 'default';
var_dump($s3);
echo "<br>\n";

?>