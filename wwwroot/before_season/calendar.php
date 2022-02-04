<?php

function h($val){
    return htmlspecialchars($val);
}

$y = intval($_GET['year'] ?? '0');
$m = intval($_GET['month'] ?? '0');

// 入力がなければ当年当月とする
if(checkdate($m, 1, $y) === false){
    $t =  time();
    $y = date('Y', $t);
    $m = date('m', $t);
}

$t_start = strtotime("first day of {$y}-{$m}");
$t_end = strtotime("last day of {$y}-{$m}");

$t = $t_start;
$data = [];

// 前月と翌月の把握
$before = strtotime('-1 month', $t_start);
$after = strtotime('+1 month', $t_start);
$before_y = date('Y', $before);
$before_m = date('m', $before);
$after_y = date('Y', $after);
$after_m = date('m', $after);

// 1日目の曜日に合わせて空文字を入力
$w = date('w', $t_start);
for ($i = 0; $i < $w; ++$i){
    $data[] = '';
}

while($t <= $t_end){
    // $data[] = date('Y-m-d', $t);
    $data[] = date('d', $t);
    $t += 86400;
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>
    Calendar of <?php echo h($m), '/', h($y); ?>
    <br>
    <a href="./calendar.php?year=<?php echo $before_y ?>&month=<?php echo $before_m ?>">前月</a>
    <a href="./calendar.php?year=<?php echo $after_y ?>&month=<?php echo $after_m ?>">翌月</a>
    <br>
    <table border="1">
        <tr>
            <th>Sun
            <th>Man
            <th>Tue
            <th>Wed
            <th>Thu
            <th>Fri
            <th>Sat
        <?php
            foreach($data as $k => $d){
                if ($k % 7 === 0){
                    echo "<tr>";
                }
                echo "<td>{$d}<br>\n";
            }
        ?>
    </table>
</body>
</html>