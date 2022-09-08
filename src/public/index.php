
<?php
include_once './Transaction.php';
include_once './classes/Transaction.php';

use Php\PracOne\Transaction;
use Php\Duplicate\Transaction as Something;

$trans1 = (new Transaction(10.0))->addTax(2)->applyDiscount(10)->getAmount();
$trans2 = (new Something(100.0))->addTax(2)->applyDiscount(10)->getAmount();

var_dump($trans1);

echo '<br/>';

var_dump($trans2);
echo '<br/>';


echo "somethign";
echo "I have no idea"
?>