<?php
require "./rectangle.php";
require "./square.php";
require "./triangle.php";
$square1 = new Square(5);
echo $square1;
$triangle1 = new Triangle(5,5,3);
echo $triangle1;
$rectangle1 = new Rectangle(5,5);
echo $rectangle1;
?>