<h3>세션으로 로그인 처리하기</h3>
<?php
   session_start();
   if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
   }
   if(isset($_SESSION["userid"])){
        unset($_SESSION["userid"]);
   }

    echo "<script>
        location.href='ex24_4_session_page.php';
        </script>";
?>