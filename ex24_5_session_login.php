<h3>세션으로 로그인 처리하기</h3>
<?php
   session_start();
   $_SESSION["userid"]="hong123";
   $_SESSION["username"]="홍길동";

    echo "<script>
        location.href='ex24_4_session_page.php';
        </script>";
?>