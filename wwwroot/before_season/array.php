<?php
$array = [0, 1, 2, 3];

var_dump($array);
echo "</br>\n";

var_dump($array[1]);
echo "</br>\n";

$array2 = [
    '1st',
    '2nd',
    '3rd',
];

var_dump($array2);
echo "</br>\n";

var_dump($array2[1]);
echo "</br>\n";

$count_1 = count($array);
$count_2 = count($array2);

echo "{$count_1}, {$count_2}</br>\n";

foreach ($array2 as $key => $val){
    echo "{$key} : {$val}</br>\n";
}

for ($i = 0; $i < count($array); ++$i){
    echo "{$i}:{$array[$i]}</br>\n";
}