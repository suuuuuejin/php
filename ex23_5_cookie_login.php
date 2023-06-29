<?php
//30일 후 쿠키만료
setcookie("userid","hong123",time()+24*60*60*30);

echo "<script> 
    location.href='ex23_4_cookie_page.php';
    </script>";

?>