<?php

ob_start();

$i = intval($_COOKIE['count'] ?? '0');
echo "count : {$i} <br>\n";

$r = random_int(1, 999);
$i += $r;

echo "add : {$r}";

setcookie('count', "{$i}");

ob_end_flush();