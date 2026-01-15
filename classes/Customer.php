<?php
declare(strict_types=1);

class Customer {
    public string $firstName;
    public string $lastName;
    public array $accounts;

    public function __construct(string $firstName, string $lastName, array $accounts) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>