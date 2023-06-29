<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$str= "l love you";
$findStr = 'o';
$pos = strpos($str,$findStr);
echo "문자열 {$findStr}의 위치는 : ".$pos;
?>