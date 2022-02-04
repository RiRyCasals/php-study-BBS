<?php

$download_filename = 'hoge-'.date('Ymd').'.csv';

// header('content-type: text/csv');
// header('Content-Disposition: attachment; filename='.$download_filename);

// echo 'abcdefg';
// echo file_get_contents(__DIR__.'/dummy.csv');

$awk = [
    [1, 2, 3],
    ['abc', 2, 3],
    [1, 'a,b,c', 3]
];

$fp = fopen('php://memory', 'w');
foreach($awk as $w){
    fputcsv($fp, $w);
}
fseek($fp, 0, SEEK_SET);
$s = '';
while($line = fgets($fp)){
    $s .= $line;
}
$s = mb_convert_encoding($s, 'SJIS', 'UTF-8');
echo $s;