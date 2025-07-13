<?php 
class Person {
    public $name;
    public function speak() {
        echo "Hi, I'm $this->name";
    }
}

class Student extends Person {
    public $course;
}

$student = new Student();
$student->name = "Jerico";
$student->speak();

?>