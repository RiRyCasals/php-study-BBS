<?php

// https://dev2.m-fr.net/RiRy/location.php

// start cash
ob_start();

echo "test"; // キャッシュしていないとエラーになる

//redirect
header("location: https://www.tech.ac.jp/");

// end cash
ob_end_flush();