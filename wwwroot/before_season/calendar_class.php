<?php

function h($val){
    return htmlspecialchars($val);
}

$y = intval($_GET['year'] ?? '0');
$m = intval($_GET['month'] ?? '0');
// var_dump($y, $m);
// echo "<br>\n";

if(checkdate($m, 1, $y) === false){
    $d_obj = new DateTime();
    $y = $d_obj->format('Y');
    $m = $d_obj->format('m');
}

$start_obj = new DateTime("first day of {$y}-{$m}");
$end_obj = new DateTime("last day of {$y}-{$m}");
// var_dump($start_obj, $end_obj);
// echo "<br>\n";

$before = clone $start_obj;
$before->sub(new DateInterval('P1M'));
$after= clone $start_obj;
$after->add(new DateInterval('P1M'));
// var_dump($before, $after);
// echo "<br>\n";

// echo $start_obj->format('D, l, N, w'), "<br>\n";
$w = intval($start_obj->format('w'));
$data = [];
for($i = 0; $i < $w; ++$i){
    $data[] = '';
}
// var_dump($data);
// echo "<br>\n";

$end_obj->add(new DateInterval('PT1S'));
$p_obj = new DatePeriod($start_obj, new DateInterval('P1D'), $end_obj);
foreach($p_obj as $d_obj){
    $wk = ['day' => $d_obj->format('d')];
    $data[] = $wk;
}
// var_dump($data);
// echo "<br>\n";
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
    <a href="./calendar.php?year=<?php echo $before_y ?>&month=<?php echo $before_m ?>">before month</a>
    <a href="./calendar.php?year=<?php echo $after_y ?>&month=<?php echo $after_m ?>">next month</a>
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
                echo "<td>";
                if (isset($d['day']) === true){
                    echo $d['day'];
                }
            }
        ?>
    </table>
</body>
</html>