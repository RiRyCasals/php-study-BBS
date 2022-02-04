<?php

for ($i = 0; $i < 10; ++$i){
    $r = random_int(0, 99);

    if ($r >= 80){
        echo "80以上です。<br>\n";
    }else if ($r >= 50){
        echo "80未満, 50以上です。<br>\n";
    }else{
        echo "50未満です。<br>\n";
    }
}