<?php

$date_obj = new DateTimeImmutable();
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";

$date_obj->add(new DateInterval('P1D'));
echo $date_obj->format('Y-m-d H:i:s'), "<br>\n";