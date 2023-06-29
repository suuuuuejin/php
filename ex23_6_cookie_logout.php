<?php
//30일 후 쿠키만료
setcookie("userid","",time()-3600);

echo "<script> 
    location.href='ex23_4_cookie_page.php';
    </script>";

?>