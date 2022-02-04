<?php

$dir = __DIR__.'/file_write';
var_dump(is_writeable($dir));

$file_name = $dir.'/'.time().'.txt';

/*
fopen()
fputs/fwrite
fclose()
*/

// $r = file_put_contents($file_name, 'text body');
// var_dump($r);

$file_name = $dir.'/'.date('Ymd').'.txt';
$log = date('Y-m-d H:i:s')."\ttest log\n";
file_put_contents($file_name, $log, FILE_APPEND | LOCK_EX);