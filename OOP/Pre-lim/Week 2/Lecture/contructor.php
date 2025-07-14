<?php
class Student {
    public $name;
    public $course;

    public function __construct($name, $course) {
        $this->name = $name;
        $this->course = $course;
        echo "Student object created.<br>";
    }

    public function showInfo() {
        return "Name: $this->name, Course: $this->course";
    }

    public function __destruct() {
        echo "<br>Student object destroyed.";
    }
}
$student = new Student("Jerico", "BSIT");
echo $student->showInfo();
?>
