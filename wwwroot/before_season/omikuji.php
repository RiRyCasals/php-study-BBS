<?php
$omikuji_box = [
    "大吉",
    "中吉",
    "小吉",
    "末吉",
    "吉",
    "仲良死",
    "凶",
    "末凶",
    "小凶",
    "中凶",
    "大凶",
];
$random_value = rand(0, count($omikuji_box)-1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>おみくじ</title>
</head>
<body>
    <h1>平等に確からしいなおみくじだよ！</h1>
    <?php
        echo "<h2>おみくじ結果：{$omikuji_box[$random_value]}</h2></br>\n";
    ?>
</body>
</html>