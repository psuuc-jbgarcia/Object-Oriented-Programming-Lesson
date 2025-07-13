<?php 
class Student{
    public $name;
    public $course;
    public $year;
     
    public function __construct($name,$course,$year){
        $this->name=$name;
        $this->course=$course;
        $this->year=$year;
        echo "Student registered: $name, $course year $year\n";

    }

    public function __destruct()
    {
        echo "Session closed for $this->name . Goodbye!";
    }
    public function showInfo(){
        echo "Student registered:  $this->name,  $this->course year  $this->year\n";
        echo "Student Information:\n";
        echo "Name :  $this->name\n";
        echo "Course :  $this->course\n";
        echo "Year :  $this->year\n";

    }
}
$name=readline("Enter your name: ");
$course=readline("Enter your course: ");
$year=readline("Enter your year: ");

$student=new Student($name,$course,$year);
$student->showInfo();
?>