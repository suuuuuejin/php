<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
     class Mem{
          private $name;
          public function getName(){
               return $this->name;
          }
     }
     $mem = new Mem();
     $mem->name ="ghdrlfehd";
     echo "dlfma:".mem->getName();
     
?>