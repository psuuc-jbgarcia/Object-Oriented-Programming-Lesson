<?php
class Student {
    private $name;
    private $id;
    private $grade;

    public function __construct($name, $id, $grade) {
        $this->name = $name;
        $this->id = $id;
        $this->grade = $grade;

        echo "Student registered: {$this->name}, ID: {$this->id}, Grade: {$this->grade}\n";
    }



    public function displayInfo() {
        echo "Name: {$this->name} | ID: {$this->id} | Grade: {$this->grade}\n";
    }
}


$name1  = readline("Enter Student 1 Name: ");
$id1    = readline("Enter Student 1 ID: ");
$grade1 = readline("Enter Student 1 Grade: ");
$student1 = new Student($name1, $id1, $grade1);

echo "\n";

$name2  = readline("Enter Student 2 Name: ");
$id2    = readline("Enter Student 2 ID: ");
$grade2 = readline("Enter Student 2 Grade: ");
$student2 = new Student($name2, $id2, $grade2);

echo "\n--- Student Records ---\n";
$student1->displayInfo();
$student2->displayInfo();
?>
