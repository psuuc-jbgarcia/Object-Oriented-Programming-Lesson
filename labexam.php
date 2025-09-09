<?php
class registration {
    private $name;
    private $id;
    private $grade;
    private $status="Fail";

    public function __construct($name,$id,$grade){
        $this->name=$name;
        $this->id=$id;
        $this->grade=$grade;
        echo "Student registered: $this->name, ID: $this->id, Grade: $this->grade \n";
    }

    public function displayInfo(){
        if($this->grade>75){
            $this->status="Pass";
        }
        echo "Name: $this->name | ID:$this->id | Grade: $this->grade Status: $this->status \n";
    }
}
$name=readline("Enter Student 1 Name: ");
$id=readline("Enter Student 1 ID: ");
$grade=readline("Enter Student 1 Grade: ");
$stud1=new registration($name,$id,$grade);

$name=readline("Enter Student 2 Name: ");
$id=readline("Enter Student 2 ID: ");
$grade=readline("Enter Student 2 Grade: ");
$stud2=new registration($name,$id,$grade);


echo "\n--Student Records--\n";
$stud1->displayInfo();
$stud2->displayInfo();
?>