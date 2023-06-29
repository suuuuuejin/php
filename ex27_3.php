<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$str = "01234567";

$cutStr = substr($str,2,3);
echo $cutStr;
?>