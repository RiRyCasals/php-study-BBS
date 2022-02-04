<?php

$fp = fopen(__FILE__, 'r');
var_dump($fp);

// $line = fgets($fp);
// var_dump($line);

while (true){
    $line = fgets($fp);
    if ($line == false){
        break;
    }
    var_dump($line);
}

// while (false !== ($line = fgets($fp))){
//     var_dump($line);
// }

// while (true){
//     $line = fgets($fp);
//     if (feof($fp) == true){
//         break;
//     }
//     var_dump($line);
// }

$r = fclose($fp);