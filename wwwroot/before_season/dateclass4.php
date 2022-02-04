<?php

$t_start = strtotime('first day of 2021-06');
$t_end = strtotime('last day of 2021-06');
$t = $t_start;
while ($t <= $t_end){
    echo date('Y-m-d', $t), "<br>\n";
    $t += 24*60*60;
}

// 末日を得る方法
echo date('Y-m-t', strtotime('2021-02-04')), "<br>\n";

echo "<br><br>\n";


$start = new DateTime('first day of 2021-06');
$end = (new DateTime('last day of 2021-06'))->add(new DateInterval('PT1S'));
$interval = new DateInterval('P1D');
$p_obj = new DatePeriod($start, $interval, $end); // while (a < b)
// var_dump($p_obj);
foreach($p_obj as $d){
    echo $d->format('Y-m-d'), "<br>\n";
}