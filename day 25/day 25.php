<?php
class Animal {
    public function makeSound() {
        echo "Animals make sounds";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog barks!<br>";
    }
}


$dog = new Dog();
$dog-> makeSound();
$dog -> bark();



//method overriding



class animals{
               public function sound(){
                              echo "Some generic animal sound <br>";
               }
}
class cat extends animals{
               public function sound(){
                              echo "Cat says  meow  <br>";
               }
}


$cat = new  cat ();
$cat ->sound();



class Vehicle {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}

class Car extends Vehicle {
    public $model;
    public function __construct($brand, $model) {
        parent::__construct($brand); // call parent constructor
        $this->model = $model;
    }
    public function showDetails() {
        echo "Brand: $this->brand, Model: $this->model";
    }
}

$car = new car("Toyota","fortuner");
$car -> showDetails();




class person{
               public $name = "Riya";
               protected $age = 25;
               private $salary = 50000;



               public function showdetails(){
                              echo "name : $this->name<br>";
                              echo "age: $this->age <br>";
                              echo "salary : $this->salary <br>";
               }
}
class Employee extends person{
               public function showemployeeinfo(){
                              echo "accesssing from child class<br>";
                              echo "name: $this->name<br>";
                              echo "age: $this->age<br>";
                              // echo "slaRY: $this->salary<br>";

               }
}


$emp = new Employee();
$emp ->showemployeeinfo();
$emp ->showdetails();