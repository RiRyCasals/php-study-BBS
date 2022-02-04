<?php

$file = new SplFileObject(__FILE__);
foreach($file as $line){
    echo "{$line}<br>\n";
}
