<?php

var_dump(checkdate(2, 14, 2021));
var_dump(checkdate(2, 29, 2020));
var_dump(checkdate(2, 29, 2021));

echo '<br>\n';


$s = 'あ';
var_dump(strlen($s), mb_strlen($s), mb_strwidth($s));
// , 文字数, バイト数

echo '<br>\n';


$s = 'a';
var_dump(strlen($s), mb_strlen($s), mb_strwidth($s));
