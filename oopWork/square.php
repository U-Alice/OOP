<?php
require_once("./shapes.php");

class Square extends Shape {
public $side;
public function __construct($side) {
$this->side = $side;
}
public function __toString(){
    return "I am a square";
}
public function calculateArea(){
return $this->side * $this->side;
}
}
?>