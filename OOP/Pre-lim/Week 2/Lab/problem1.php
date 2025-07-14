<?php 
// Create a BankAccount class that:
// •	Automatically displays a welcome message when the account is created (constructor)
// •	Automatically displays a goodbye message when the object is destroyed (destructor)
// •	Stores the account holder's name and balance
// Enter your name: Jerico
// Welcome, Jerico! Your account has been created with a balance of ₱1000.

// Your current balance is: ₱1000
// Goodbye, Jerico. Your session has ended.
class BankAccount{
    public $name;
    public $balance;
    public function __construct($name,$balance=1000){
        $this->name=$name;
        $this->balance=$balance; 
        echo "Welcome, $name Your account has been created with a balance of $balance.\n";
    

    }
    public function __destruct(){
        echo "Goodbye, Jerico. Your session has ended.";
    }

}
$name=readline("Enter your name: ");
$acc=new BankAccount($name);



?>