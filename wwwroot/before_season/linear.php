<?php
$A = [];
$L = 100;
for ($i = 0; $i < $L; ++$i){
    $A[$i] = rand(0, 100);
}

$v = 10;

for ($i = 0; $i < count($A); ++$i){
    if ($A[$i] == $v){
        echo "Hit! : index is {$i}";
        break;
    }
    if ($i == count($A)-1){
        echo "None";
    }
}
?>