<?php
declare(strict_types=1);

namespace App;

class Transaction {
    private float $amount = 10.0;

    function __construct($amount)
    {
    
        $this->amount = $amount;
        echo "this is from the main class\n";
    }

    public function addTax (float $rate) : Transaction {
        $this->amount += $rate / 100;
        return $this;

    } 

    public function applyDiscount (float $rate) : Transaction {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }


    public function getAmount () {
        return $this->amount;
    }
    
}
