<?php
declare(strict_types=1);

class Account {
    public string $accountNumber;
    public string $accountType;
    public float $balance;

    public function __construct(string $accountNumber, string $accountType, float $balance) {
        $this->accountNumber = $accountNumber;
        $this->accountType = $accountType;
        $this->balance = $balance;
    }
}
?>