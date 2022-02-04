<?php

var_dump(file_exists(__FILE__));
var_dump(is_readable(__FILE__));
var_dump(is_writable(__FILE__));

// $f_obj = new SplFileObject('dummy'); 
$f_obj = new SplFileObject(__FILE__); 
var_dump($f_obj);
echo "<br>\n";

// while (($line = $f_obj->fgets()) !== false){
while ($f_obj->eof() === false){
    $line = $f_obj->fgets();
    var_dump($line);
}
echo "<br>\n";

foreach($f_obj as $line){
    var_dump($line);
}
echo "<br>\n";

foreach($f_obj as $no=>$line){
    var_dump($no, $line);
}
echo "<br>\n";