<?php
$start_value = 1;
$exit_value = 100;
for ($i = $start_value; $i < $exit_value; ++$i){
    $isFizz = $i%3==0;
    $isBizz = $i%5==0;
    if ($isFizz and $isBizz){
        echo "FizzBazz</br>\n";
    }elseif ($isFizz){
        echo "Fizz</br>\n";
    }elseif ($isBizz){
        echo "Bizz</br>\n";
    }else{
        echo "{$i}</br>\n";
    }
}
?>