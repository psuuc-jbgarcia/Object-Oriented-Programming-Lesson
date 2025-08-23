<!-- Laboratory Quiz – Object-Oriented Programming
 Problem 1(15pts)
A company classifies its employees based on their years of service using the following rules:
•	Less than 1 year → Probationary Employee
•	1 to 5 years → Regular Employee
•	6 to 15 years → Senior Employee
•	More than 15 years → Veteran Employee
Write a PHP program that accepts the employee’s years of service as input and displays the number of years and the corresponding classification. -->
<?php 

$year=readline("Enter a number");

if($year<1){
    echo "Probationary Employee";
}
else if($year==1 && $year<=5){
        echo "Regular Employee";

}
else if ($year==6 && $year<=15){
            echo "Senior Employee";

}
else if($year>15){
    echo "Veteran Employee";
}

?>