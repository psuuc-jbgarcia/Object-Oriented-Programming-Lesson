<?php
// class Bank{
//     private $balance;
//     public function __construct($initial=0)
//     {
//         $this->balance=$initial;
//         echo "Your current balance: $this->balance \n";

        
//     }
//     public function deposit($amount){
//         $this->balance+=$amount;
//         echo "Your current balance: $this->balance \n";
//     }
//     public function withdraw($amount){
//         $this->balance-=$amount;
//         echo "Your current balance: $this->balance  \n";

//     }
//     public function checkbalance(){
//                 echo "Your current balance: $this->balance  \n";

//     }
   
// }

// $bank1=new Bank(100);
// $bank1->deposit(1000);
// $bank1->withdraw(100);

// $bank1->checkbalance();
// $bank1->balance;
// class message{
//     public static $word="Hello world";
//     public static function greet(){
//         echo "Hello world \n";
//     }

// }
// echo message::$word;
// echo message::greet();
class Bank{
    private $balance;
    public function __construct($initial=0)
    {
        $this->balance=$initial;
        echo "Your current balance: $this->balance \n";

        
    }
    public function deposit($amount){
        $this->balance+=$amount;
        echo "Your current balance: $this->balance \n";
    }
    public function withdraw($amount){
        if($amount>$this->balance){
            echo "Insufficient Amount";
        }
        else{
            $this->balance-=$amount;
        echo "Your current balance: $this->balance  \n";
        }

    }
    public function checkbalance(){
                echo "Your current balance: $this->balance  \n";

    }
    public function __destruct(){
        echo "The bank is signing off";
    }   
}
$checker=true;
$bank1=new Bank(0);
while($checker){
    echo "\n_____Simple Bank System____\n";
    echo "1. Deposit \n";
    echo "2. Withdraw \n";
    echo "3. Check Balance \n";
    echo "4. Exit \n";
    $choice=readline("Enter your choice: ");


    if($choice==1){
        $amount =readline("Enter an amount: ");
        $bank1->deposit($amount);
    }
    else if($choice==2){
        $amount=readline("Enter an amount to withdraw: ");
        $bank1->withdraw($amount);
    }
    else if($choice==3){
        $bank1->checkbalance();
    }
    else if($choice==4){
        $checker=false;
    }
    else{
        echo "Inavalid Input";
    }

}

?>


