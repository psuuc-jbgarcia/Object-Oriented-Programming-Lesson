<?php 

// get
class Student {
    private $name;

public function __set($property,$value){
    //creating 
    $this->$property=$value;
}
public function __get($property){
    return $this->$property;
}
}

$s=new Student();
$s->name="Jerico \n";
$s->nickname="echo";// dagdag na property
echo $s->name;
echo $s->nickname;

// to string
class Person {
    public function __toString(){
        return "I am a Person";
    }

}
$p=new Person();
echo $p;

// invoke

class Greet {
    public function __invoke($name){
        echo "Hello $name";
    }
}
$hi=new Greet();
$hi("Jerico");

//call and call static

Class Demo {
    public function __call ($method,$args){
        echo "Method: $method does not exits \n";
    }
     static     public function __callStatic ($method,$args){
        echo "Static Method: $method does not exits \n";
    }
}
$s=new Demo();
$s->run();

Demo::run();

class Calculator {
    public function __call($method,$args){
        if($method=="add"){

            if(count($args)==2){
                echo "Sum of two numbers is :". $args[0] + $args[1]. "\n";
            }
            else if(count($args)==3){
                 echo "Sum of three numbers is :". $args[0] + $args[1] + $args[2];
            }
            else{
                echo "Invalid Number of arguments";
            }
        }
        else{
            echo "Method not exist";
        }
    }
}
$c=new Calculator();
$c->add(4,8);
$c->add(1,2,6);
 class Car{
    public $brand= "Toyota";
    public function __clone(){
        $this->brand="Copied".$this->brand;
    }
 }
 $c1=new Car();
 $c2 =clone $c1;
 echo $c2->brand;
?>