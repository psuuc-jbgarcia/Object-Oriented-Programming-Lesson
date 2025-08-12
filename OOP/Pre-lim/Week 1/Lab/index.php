<?php
// Print Even Numbers:
// Use a for loop to print all even numbers from 1 to 20.

// Count Even Numbers Write a program using a while loop that asks the user to enter 7 numbers and counts how many of them are even.

// for ($i=0;$i<20;$i++){
// if($i%2==0){
//     echo $i."\n";
// }
// }
// $count=0;
// $eventCount=0;
// while($count<7){
//     $num = readline("Enter a number ".($count+1).":");
//     if($num%2==0){
//         $eventCount++;
//     }
//          $count++;
// }
// echo "The even numbers is :$eventCount";
$day = readline("Enter a number (1-3): ");

switch ($day) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    default:
        echo "Invalid day number\n";
}
?>


