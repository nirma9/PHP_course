<?php
interface remote{
               public function turnon();
               public function turnoff();
}


class TV implements remote{
               public function turnon(){
                              echo "TV is turned on <br>";
               }
               public function turnoff(){
                              echo "tv is turnrd OFF <br>";
               }
}

$tv = new TV();
$tv->turnon();
$tv->turnoff();



//multple implementations

interface Remotes{
               public function turnOn();
               public function turnOff();
}

class AC implements Remotes{
               public function turnOn(){
                              echo "AC is turned on <br>";
               }
               public function turnOff(){
                              echo "AC is turnrd OFF <br>";
               }

}

class speaker implements Remotes{
               public function turnOn(){
                              echo "Speaker playing Music <br>";
               }
               public function turnOff(){
                              echo "speaker stopped <br>";
               }
}

$ac = new AC();
$speaker = new speaker();

$ac->turnOn();
$speaker->turnOn();



//multiple interfaces in one class 
interface reader{
               public function read();
}
interface writer{
               public function write();
}

class filehandler implements reader,writer{
               public function read(){
                              echo "Reading data from file <br>";
               }
               public function write(){
                              echo "writing data to a file <br>";
               }
}


$file = new filehandler();
$file->read();
$file->write();





abstract class Shape {
    abstract public function area();

    public function info() {
        echo "This is a shape.<br>";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($r) {
        $this->radius = $r;
    }

    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}



$circle = new Circle(5);
$circle->info();
echo "Area of Circle: " . $circle->area();








interface animal{
               public function makesound();
}

class dog implements animal{
               public function makesound(){
                              echo "dog says woof <br>";
               }

}
class cat implements animal{
               public function makesound(){
                              echo "cat sAYS MEOW<BR>..";
               }
}

class cow implements animal{
               public function makesound(){
                              echo "cow  sAYS Moo<BR>..";
               }
}


function sound(Animal $animal){
               $animal->makesound();
               
}

$dog= new dog();
$cat = new cat();
$cow = new cow();

sound($dog);
sound($cat);
sound($cow);


