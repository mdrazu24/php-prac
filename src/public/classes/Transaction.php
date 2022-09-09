<?php

declare(strict_types=1);

namespace Php\Duplicate;

class Transaction
{

    function __construct($amount)
    {

        $this->amount = $amount;
    
        echo "This is from the duplicate class\n";
        echo "</br>";

    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $rate / 100;
        return $this;
    }

    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }


    public function getAmount()
    {
        return $this->amount;
    }
}
