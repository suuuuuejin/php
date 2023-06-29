<?php
     class Triangle{
          public $width;
          public $height;
          public function __construct($width, $height){
               $this->width = $width;
               $this->height = $height;
          }
          public function getArea(){
               $area = $this->width * $this->height * 0.5;
               return $area;
          }
     }

     class Square extends Triangle{
          public function isSquare(){
               if($this->width == $this->height){
                    return true;
               }else{
                    return false;
               }
          }
     }

     $rect = new Square(10,10);
     if($rect->isSquare()){
          echo "정사각형의 넓이 : ".$rect->getArea();
     }
     else{
          echo "직사각형의 넓이 : ".$rect->getArea();
     }
     
?>