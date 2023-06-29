<?php
    namespace agroup;
    
    class user{
        function loadUser(){
            return '첫 번째 클래스의 메서드';
        }

    }
    
    namespace bgroup;
    
    class user{
        function loadUser(){
            return '두 번째 클래스의 메서드';
        }

    }
    
    // $aUser = new \agroup\user;
    // echo $aUser->loadUser();
    // echo '<br>';
    // $bUser = new \bgroup\user;
    // echo $bUser->loadUser();
    
    use \agroup\user as au;
    use \bgroup\user as bu;

    $aUser = new au;
    echo $aUser->loadUser();
    echo '<br>';
    $bUser = new bu;
    echo $bUser->loadUser();
?>