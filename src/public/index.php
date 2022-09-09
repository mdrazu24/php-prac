
<?php
// $trans1 = (new Transaction(10.0))->addTax(2)->applyDiscount(10)->getAmount();

// var_dump($trans1);
// include_once '../app/Transaction.php';
// include_once '../app/DB.php';

// new Transaction(20);

use App\DB;
use App\Transaction;

require_once '../vendor/autoload.php';

var_dump(DB::getInstance([]));

echo '<br/>';

$id = new Ramsey\Uuid\UuidFactory();
$db1 = DB::getInstance([]);

echo $id->uuid4();

echo "</br>";

$id = new Transaction(20);

echo $id->addTax(20)->getAmount();
echo "</br>";

$arr = [
    "some" => "something",
    "ANother" => "another"
];
echo count($arr);
echo "</br>";

echo "somethign";
echo "I have no idea"
?>