<?php
class Student {
    public $name;
    public $age;
    public $course;

    public function showInfo() {
        return "Name: $this->name, Age: $this->age, Course: $this->course";
    }
}

// Create first student
$student1 = new Student();
$student1->name = "Jerico";
$student1->age = 20;
$student1->course = "BSIT";

// Create second student
$student2 = new Student();
$student2->name = "Liza";
$student2->age = 19;
$student2->course = "BSCS";

// Display both students
echo $student1->showInfo();
echo "\n";
echo $student2->showInfo();
?>
