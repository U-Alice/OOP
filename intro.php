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
// echo((new DateTime())->format('Y')); // Year
// echo((new DateTime())->format('M')); // month
// echo ((new DateTime())->format('D')); // day
// echo ((new DateTime())->format('H')); // hour
// echo ((new DateTime())->format('i')); // minute
// echo ((new DateTime())->format('s')); // second
// echo ((new DateTime())->format('u')); // microsecond
// echo ((new DateTime())->format('i')); //current minutes

echo ((new DateTime())-> format('Y-m-d H:i:s')); // current date and time


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
echo "<h1>Magic methods</h1>";
echo "<h2>__construct</h2>";
class School{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$s = new School("Rwanda Coding Academy", "5");
var_dump($s);

echo "<h2>__String</h2>";

class Teacher{

    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function __toString(){
        return "Teacher: ".$this->name." ".$this->age;
    }

}
$t = new Teacher("John", "30");
echo $t;

echo "<h1>dob with to string</h1>";

class Cats{
    static $code = 22222;
    public $name;
    public $dob;
    function __construct($name, $dob){
        $this->name = $name;
        $this->dob = $dob;
    }
    function __toString(){
        $today = date('y-m-d');
        $age = date_diff(date create($this->dob), date create($today));
    }
}

?>