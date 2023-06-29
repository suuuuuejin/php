<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

    class pen{
        public $color;
        public $bold;
        public $price;

        function __construct($color,$bold,$price){
            echo "사용중인 펜";
            echo "<br>";
            echo "색:{$color}";
            echo "<br>";
            echo "두께:{$bold}";
            echo "<br>";
            echo "가격:{$price}";
            echo "<br>";
            $this->color=$color;
            
        }
        public function write($contents){
            echo "{$this->color}색 펜을 사용하여";
            echo "{$contents}를 쓰다.";
        }
        public function draw($contents){
            echo "{$contests}을 그리다";
        }
    }
    
    $pen = new pen('핑크','두꺼운','1000');
    $pen->write('책');
?>