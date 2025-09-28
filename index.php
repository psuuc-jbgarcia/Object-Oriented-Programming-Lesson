<?php
// Abstract class
abstract class Course {
    protected $title;
    protected $instructor;

    public function __construct($title, $instructor) {
        $this->title = $title;
        $this->instructor = $instructor;
    }

    // Abstract method (no body)
    abstract public function enrollStudent($studentName);

    // Concrete method (with body)
    public function courseDetails() {
        echo "Course Title: {$this->title} | Instructor: {$this->instructor}\n";
    }
}

// Subclass for ProgrammingCourse
class ProgrammingCourse extends Course {
    private $language;

    public function __construct($title, $instructor, $language) {
        parent::__construct($title, $instructor);
        $this->language = $language;
    }

    public function enrollStudent($studentName) {
        echo "Student {$studentName} enrolled in Programming Course ({$this->language}).\n\n";
    }
}

// Subclass for DesignCourse
class DesignCourse extends Course {
    private $software;

    public function __construct($title, $instructor, $software) {
        parent::__construct($title, $instructor);
        $this->software = $software;
    }

    public function enrollStudent($studentName) {
        echo "Student {$studentName} enrolled in Design Course ({$this->software}).\n\n";
    }
}

// --- Main Program ---
$studentName = readline("Enter student name: ");

$progCourse = new ProgrammingCourse("OOP with Java", "Prof. Santos", "PHP");
$designCourse = new DesignCourse("UI/UX Fundamentals", "Ms. Dela Cruz", "Figma");

$progCourse->courseDetails();
$progCourse->enrollStudent($studentName);

$designCourse->courseDetails();
$designCourse->enrollStudent($studentName);
?>
