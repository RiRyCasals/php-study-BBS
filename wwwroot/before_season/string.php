<?php

echo "<br>一重引用符と二重引用符の違い（その1）<br>";

$s = 'string';
$t = "ssstring";

echo $s, "<br>";
echo $t, "<br>";


echo "<br>一重引用符と二重引用符の違い（その2）<br>";

$i = 10;
$s = '{$i} is val';
$t = "{$i} is val";

echo $s, "<br>";
echo $t, "<br>";


echo "<br>一重引用符と二重引用符の違い（その2.1）<br>";

$ii = 99;
$t = "$ii is val";
echo $t, "<br>";
$t = "{$i}i is val";
echo $t, "<br>";


echo "<br>一重引用符と二重引用符の違い（その3）<br>";

$s = 'st \t ri \n ng';
$t = "st \t ri \n ng";

echo $s, "<br>";
echo $t, "<br>";


echo "<br>一重引用符と二重引用符の違い（その3.1）<br>";

$s = ' \' \\ \" ';
$t = " \' \\ \" ";

echo $s, "<br>";
echo $t, "<br>";

