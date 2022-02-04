<?php
echo 'html</br>\n';

$flag = True;
if ($flag){
    echo "True</br>\n";
}else{
    echo "False</br>\n";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>html.php</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 5; ++$i){
            $random = rand(0, 100);
            echo "{$i}:{$random}</br>\n";
        }
    ?>
</body>
</html>