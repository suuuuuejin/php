<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$ch1 = "A";
$ch2 = "a";
echo "대문자 아스키코드 확인<br>";
for($i=1; $i<=26; $i++){
    if($i==26){
        echo ord($ch1)."<br>";
    }else{
        echo ord($ch1).", ";
    }$ch1++;
}
echo "소문자 아스키코드 확인<br>";
for($i=1; $i<=26; $i++){
    if($i==26){
        echo ord($ch2)."<br>";
    }else{
        echo ord($ch2).", ";
    }$ch2++;
}
echo "아스키코드 문자 확인<br>";
$no = 65;    
for($i=1; $i<=26; $i++){
    if($i==26){
        echo chr($no)."<br>";
    }else{
        echo chr($no).", ";
    }$no++;
}

?>