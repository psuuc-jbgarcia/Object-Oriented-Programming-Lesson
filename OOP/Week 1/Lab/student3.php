<?php
class Student {
    public $name;
    public $age;
    public $course;

    public function showInfo() {
        return "Name: $this->name, Age: $this->age, Course: $this->course";
    }

    public function greetStudent() {
        return "Hello, my name is $this->name and I study $this->course.";
    }
}

// Create a student object
$student = new Student();
$student->name = "Mark";
$student->age = 21;
$student->course = "BSIT";

// Display the greeting
echo $student->greetStudent();
?>
