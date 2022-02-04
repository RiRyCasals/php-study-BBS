<?php

$t = time();
$t += 24*60*60;
echo date('Y-m-d H:i:s', $t), "<br>\n";

$date_obj = new DateTime();
$date_obj->setTimestamp($date_obj->getTimestamp() + 24*60*60);
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";

$date_obj->add(new DateInterval('P1D'));
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";


$date_obj = new DateTime('yesterday');
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";

$date_obj = new DateTime('-3 Days');
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";