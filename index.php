<?php

interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$pet = new Dog();
$pet->makeSound(); 


?>