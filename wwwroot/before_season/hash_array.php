<?php

// 連想配列（hash配列）の作成
$hash_array = [
    'key1' => 111,
    'key2' => 222,
    'key3' => 333,
];

var_dump($hash_array);

echo "</br>\n{$hash_array['key1']}</br>\n";
var_dump($hash_array['key1']);
echo "</br>\n";

$count1 = count($hash_array);
echo "{$count1}</br>\n";