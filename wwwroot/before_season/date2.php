<?php

$time = time();
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('tomorrow');
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('yesterday');
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('-1 day');
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('+2 days');
echo date('Y/m/d H:i:s', $time), "<br>\n";


$time = strtotime('first day of');
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('last day of');
echo date('Y/m/d H:i:s', $time), "<br>\n";


$time = strtotime('last day of', strtotime('2020/02/01'));
echo date('Y/m/d H:i:s', $time), "<br>\n";


$time = strtotime('+1 month');
echo date('Y/m/d H:i:s', $time), "<br>\n";

$time = strtotime('+1 month', strtotime('2021/01/31'));
echo date('Y/m/d H:i:s', $time), "<br>\n";
