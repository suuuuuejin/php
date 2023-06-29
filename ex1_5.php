<?php
    class Hello{
        public $name = "홍길동";
        function say(){
            return $this->name."님 안녕하세요"; 
        }
    }
    $msg = new Hello;
    echo $msg->say();
    echo "<br>";
    var_dump($msg);
?>