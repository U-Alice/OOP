<?php
require_once("./shapes.php");

class Rectangle
extends Shape {
public $width;
public $height;

public function __construct($width, $height) {
$this->width = $width;
$this->height = $height;
}
public function __toString(){
    return "I am a rectangle";
}
public function calculateArea(){
return ($this->width * $this->length) / 2;
}
}
?>