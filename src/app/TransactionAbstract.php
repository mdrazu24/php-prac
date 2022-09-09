<?php

namespace App;
abstract class TransactionAbstract {
    private int  $toal = 0;

    public function addSome (int $other) : int {
       return $other * $this->toal;
    } 


}