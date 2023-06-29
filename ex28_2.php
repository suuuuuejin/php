<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$upStr = $_POST["up"];
$lowStr = $_POST['low'];
echo $upStr." 대문자로-> ".strtoupper($upStr)."<br>";
echo $lowStr."소문자로->".strtolower($lowStr);
?>