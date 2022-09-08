<?php
declare(strict_types=1);
class Transaction 
{
    private float $amount = 10.0;

    function __construct($amount)
    {
    
        $this->amount = $amount;
        
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
