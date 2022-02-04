<?php
$file_name = '2021.log';

$log = date('Y年m月d日、H時i分s秒') . "\n";
file_put_contents($file_name, $log, FILE_APPEND | LOCK_EX);