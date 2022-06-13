<?php
require_once("./shapes.php");

class Triangle
extends Shape {
public $base;
public $height;
public $hypotenuse;
public function __construct($side1, $side2, $side3) {
$this->side1 = $side1;
$this->side2 = $side2;
$this->side3 = $side3;
}
public function __toString(){
    return "I am a triangle";
}
public function calculateArea(){
    return ($this->height * $this->base) / 2;
}
}
?>