<?php

require_once('./bmi_init.php');

ob_start();
session_start();

$name = $_POST["name"] ?? '';
$height = floatval($_POST["height"] ?? 0);
$weight = floatval($_POST["weight"] ?? 0);

$_SESSION['name'] = $name;
$_SESSION['height'] = $height;
$_SESSION['weight'] = $weight;

// validation
if ($height === 0.0 or $weight === 0.0){
    $_SESSION['error_invalid_value'] = true;
    header('Location: ./bmi.php');
    return ;
}

$bmi = $weight / (($height/100)**2);
$bmi = round($bmi, 2);

if ($bmi < 16){
    $judgment = 'やせすぎ';
} else if ($bmi < 17.0){
    $judgment = 'やせ';
} else if ($bmi < 18.5){
    $judgment = 'やせぎみ';
} else if ($bmi < 25.0){
    $judgment = '普通';
} else if ($bmi < 30.0){
    $judgment = '前肥満';
} else if ($bmi < 35.0){
    $judgment = '肥満（1度）';
} else if ($bmi < 40.0){
    $judgment = '肥満（2度）';
} else{
    $judgment = '肥満（3度）';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <h1>BMI計算結果</h1>
    <?php echo h($name);?>
    <br>
    BMIの値は <?php echo h($bmi);?>, <?php echo h($judgment);?>
</body>
</html>