<?php 

echo "<br>文字列の結合<br>";

$s = "abc";
$t = "xyz";

// $u = "{$s}{$t}";
$u = $s . $t; // $u = $s + $t; xxx
echo "{$u}<br>";
var_dump($u);


echo "<br>数値と数値の文字列連結<br>";
$i = 10;
$j = 20;
$k = $i . $j;
echo "{$k}<br>";
var_dump($k);
