<?php

$csv_file_name = __DIR__.'/dummy.csv';
$file_name = 'php://filter/read=convert.iconv.SJIS-win%2FUTF-8/resource='.$csv_file_name;

$f_obj = new SplFileObject($file_name);
$f_obj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);

foreach($f_obj as $no => $line){
    var_dump($line);
}