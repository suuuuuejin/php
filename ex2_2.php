<?php
    $a = 20;
    $b = 10;
    if($a>$b):
        echo $a."값이 더 큽니다.";
    elseif($a==$b):
        echo "두값이 같습니다.";
    else:
        echo "아님";
    endif;
?>