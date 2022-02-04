<?php

// $csv_file_name = __DIR__.'/dummy.csv';
$csv_file_name = __DIR__.'/dummy2.csv';

$fp = fopen($csv_file_name, 'r');

// while($line = fgets($fp)){
//     $line = mb_convert_encoding($line, 'UTF-8', 'SJIS');
//     $datum = explode(',', $line);
//     var_dump($datum);
// }

while($datum= fgetcsv($fp)){
    foreach($datum as $k => $s){
        $s = mb_convert_encoding($s, 'UTF-8', 'SJIS');
        echo "{$k}: {$s}<br>\n";
    }
    echo "<br>\n";
}

fclose($fp);