<?php
class BankAccount {
    private $balance;

    public function __construct($amount) {
        $this->balance = $amount;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(1000);
$account->deposit(500);
echo $account->getBalance(); 

?>
