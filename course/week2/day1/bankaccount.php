<?php

class BankAccount {
    public $ownerName;
    private $balance;

    public function __construct($ownerName, $balance) {
        $this->ownerName = $ownerName;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Insufficient funds to withdraw $amount.<br><br>";
        } else {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountInfo() {
        return "Account owner: ". $this->ownerName .". Current balance: ". $this->getBalance().".";
    }
}

$account = new BankAccount("Alex", 1000);
$account->deposit(400);
$account->withdraw(3000);
echo $account->getAccountInfo();

?>