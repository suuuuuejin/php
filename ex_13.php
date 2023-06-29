<?php
function Sum($a){
    $sum = 0;
    for($i=0; $i<=$a; $i++){
        $sum+=$i;
    }
    return $sum;
}
$num = (int)($_POST['in']);
echo Sum($num);
echo strcmp("2","10");
?>