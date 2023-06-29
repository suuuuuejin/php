<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

function check($a,$b){
    if(strcmp($a,$b)==0){
        echo "same";
    }else{
        echo "different";
    }   

}

$str1 = $_POST['dat1'];
$str2 = $_POST['dat2'];
check($str1,$str2);
?>