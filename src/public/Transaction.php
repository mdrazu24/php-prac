<?php
declare(strict_types=1);
class Transaction 
{
    public float $amount = 10.0;

    function __construct($amount)
    {
    
        $this->amount = $amount;
        
    }

    
    
    
}
