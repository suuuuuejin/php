<h3>세션으로 로그인 처리하기</h3>
<?php
    session_start();
    if(!isset($_SESSION["userid"]))
        echo "<a href='ex24_5_session_login.php'>로그인</a>";
    else
        echo $_SESSION["username"]."님|"."<a href='ex24_6_session_logout.php'>로그아웃</a>";
?>