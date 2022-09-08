
<?php
require_once './Transaction.php';

$trans1 = (new Transaction(10.0))->addTax(2)->applyDiscount(10)->getAmount();

var_dump($trans1)

?>