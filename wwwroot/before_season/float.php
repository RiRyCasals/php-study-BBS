<?php

$f = 0.1 + 0.2;
if ($f === 0.3){
    echo '(0.1 + 0.2 === 0.3';
} else{
    echo '(0.1 + 0.2 !== 0.3 ...???';
}

echo "<br>\n";
var_dump($f, 0.3);
echo "<br>\n";

printf("%.32f <br>\n", $f);
printf("%.32f <br>\n", 0.3);

echo "<br>\n";


$f2 = 0.125 + 0.125;
if ($f2 === 0.25){
    echo 'true';
} else{
    echo 'false';
}

echo "<br>\n";
var_dump($f2, 0.25);
echo "<br>\n";

printf("%.32f <br>\n", $f2);
printf("%.32f <br>\n", 0.25);