<?php

echo date(DATE_ATOM), "<br>\n";
echo date(DATE_COOKIE), "<br>\n";
echo date(DATE_ISO8601), "<br>\n";
echo date(DATE_RFC7231), "<br>\n";
echo date('Y/m/d H:i:s'), "<br>\n";

$time = time();
var_dump($time); // unix seconds
echo "<br>\n";

$time = strtotime('August 15th, 2014');
var_dump($time);
echo "<br>\n";
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('8/15/2014');
var_dump($time);
echo "<br>\n";
echo date('Y/m/d H:i:s', $time), "<br>\n";