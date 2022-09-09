<?php
declare(strict_types=1);

namespace App;

use App\TransactionAbstract;
use App\TransactionInterface;

class Transaction extends TransactionAbstract {
    private float $amount = 10.0;

    function __construct($amount)
    {
    
        $this->amount = $amount;
        echo "this is from the main class\n";
    }

    public function addSome(int $other) : float
    {
        
        return $this->amount * $other;
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

    public function getCurrency()
    {
        return $this->amount;
    }


    
}
