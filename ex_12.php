<?php
function Multiple3($a){
    if($a%3 == 0){
        return "3의 배수이다";
    }else{
        return "3의 배수가 아니다";
    }
}
$num = (int)($_POST['in']);
echo Multiple3($num);
?>