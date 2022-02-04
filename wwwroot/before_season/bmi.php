<?php

require_once('./bmi_init.php');

ob_start();
session_start();

$error_invalid_value = $_SESSION['error_invalid_value'] ?? false;
unset($_SESSION['error_invalid_value']);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算サイト</title>
</head>
<body>
    <h1>BMI計算</h1>
    <?php
        if ($error_invalid_value === true){
            echo '<span style="color: #f00;">0 is not expected.</span><br>';
        }
    ?>
    <form action="./bmi_cal.php" method="post">
        名前：<input type="text"
                    name="name"
                    value="<?php echo h($SESSION['name'] ?? ''); ?>">
        <br>
        身長：<input type="text"
                    name="height"
                    value="<?php echo h($SESSION['height'] ?? ''); ?>">cm
        <br>
        体重：<input type="text"
                    name="weight"
                    value="<?php echo h($SESSION['weight'] ?? ''); ?>">Kg
        <br>
        <button type="submit">計算する</button>
    </form>
</body>
</html>