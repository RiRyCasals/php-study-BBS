<?php

echo "<br>乱数生成<br>";

$i = random_int(1, 100);
// echo $i, "<br>\n";
echo "{$i}<br>\n";

$j = random_int(1, 100);
// echo $j, "<br>\n";
echo "{$j}<br>\n";


echo "<br>四則演算<br>";

$k = $i + $j;
echo "{$i} + {$j} = {$k}<br>\n";

$k = $i - $j;
echo "{$i} - {$j} = {$k}<br>\n";

$k = $i * $j;
echo "{$i} × {$j} = {$k}<br>\n";

$k = $i / $j;
echo "{$i} ÷ {$j} = {$k}<br>\n";


echo "<br>剰余<br>";

$k = $i % $j;
echo "{$i} mod {$j} = {$k}<br>\n";


echo "<br>冪乗<br>";

$k = $i ** $j;
echo "{$i} ^ {$j} = {$k}<br>\n";


echo "<br>演算の優先順位<br>";

$k = $i + $j * $i;
echo "{$i} + {$j} × {$i} = {$k}<br>";

$k = ($i + $j) * $i;
echo "( {$i} + {$j} ) × {$i} = {$k}<br>";