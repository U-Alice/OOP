<?php

class Person{
    public $firstName;
    public $lastName;
    private $age;

    public function __toString(){
        return $this->firstName." ".$this->lastName;
    }
    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function checkAge(){
        if($this->age < 18){
            return "You are not old enough to get The nationalID";
        }else{
            return "You are old enough to get the national Id";
        }
    }
}

$axelle = new Person("Axelle", "Ineza", "20");
?>