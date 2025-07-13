<?php
class Student {
    public $name;
    public $age;
    public $course;

    public function showInfo() {
        return "Name: $this->name, Age: $this->age, Course: $this->course";
    }
}

$student1 = new Student();

$student1->name = "Jerico";
$student1->age = 20;
$student1->course = "BSIT";


?>
