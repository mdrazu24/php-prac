<?php

declare(strict_types=1);

namespace Php\Duplicate;

use DateTime;

class Transaction
{
    private float $amount = 10.0;

    function __construct($amount)
    {

        $this->amount = $amount;
        echo "This is from the duplicate class\n";
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
