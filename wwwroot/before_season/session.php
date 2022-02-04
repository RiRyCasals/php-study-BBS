<?php

ob_start();
session_start();

$i = intval($_SESSION['count'] ?? '0');
echo "count : {$i} <br>\n";

$r = random_int(1, 999);
$i += $r;

echo "add : {$r}";

$_SESSION['count'] = $i;

ob_end_flush();