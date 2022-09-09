<?php

namespace App;
interface TransactionInterface {
    // get money method
    public function getAmount() : int;
    public function getCurrency() : int;
    
}