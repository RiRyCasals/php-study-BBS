<?php

// var_dump($_FILES['userfile']);

$csv_file_name = $_FILES['userfile']['tmp_name'];

if (is_uploaded_file($csv_file_name) === false){
    echo "???";
    exit;
}

$file_name = 'php://filter/read=convert.iconv.SJIS-win%2FUTF-8/resource='.$csv_file_name;

$f_obj = new SplFileObject($file_name);
$f_obj->setFlags(SplFileObject::READ_CSV | SplFileObject::DROP_NEW_LINE);

foreach($f_obj as $no => $line){
    var_dump($line);
}