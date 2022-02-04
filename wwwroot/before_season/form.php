<?php

function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}

// var_dump($_GET);
// var_dump($_POST);

$input1 = $_POST["input1"] ?? "";
$input2 = $_POST["input2"] ?? "";

// xxx => xss
// echo "{$input1} と {$input2} が入力されました";

// ooo
echo h($input1), "と",
     h($input2), "が入力されました";