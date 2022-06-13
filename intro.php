<?php

class Person{
    public $name;
   public function Speak(){
        echo 'Hi '. $this->name;
    }
}

$p1 = new Person;
$p1->name = "John";
$p1->speak();

class Dog{
    public $legs = 4;
    public function display(){
        echo $this-> legs;
    }
}
$d1 = new Dog();
$d1->display();
$d2 = new Dog();
$d2->legs = 2;
$d2->display();
$d3 = new Dog();
$d3->display();
$d4 = new Dog();
$d4-> legs = 3;
$d4-> display();

//accessing dateTime 

echo "<br>";
echo((new DateTime())->format('Y')); // Year
echo((new DateTime())->format('M')); // month
echo ((new DateTime())->format('D')); // day
echo ((new DateTime())->format('H')); // hour
echo ((new DateTime())->format('i')); // minute
echo ((new DateTime())->format('s')); // second
echo ((new DateTime())->format('u')); // microsecond
echo ((new DateTime())->format('i')); //current minutes


echo "<h1>Properties and methods</h1>";

class Student{
    public $bar = "course";
    public function bar(){
        echo "register";
    }
}
$obj = new Student();
echo $obj-> bar, PHP_EOL, $obj-> bar(), PHP_EOL;

//magic methods 

class School{
    public function __construct (){
        echo "Object created";
    }
}

$s = new School();
?>