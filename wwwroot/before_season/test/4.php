<?php
$i = random_int(10, 30);
if($i < 20){
    echo "under 20", "<br>\n";
}elseif ($i == 20) {
    echo "20just" , "<br>\n";
}else{
    echo "over 20", "<br>\n";
}