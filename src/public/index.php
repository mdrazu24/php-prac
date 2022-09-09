
<?php
// $trans1 = (new Transaction(10.0))->addTax(2)->applyDiscount(10)->getAmount();

// var_dump($trans1);
// include_once '../app/Transaction.php';
// include_once '../app/DB.php';

// new Transaction(20);

use App\DB;

require_once '../vendor/autoload.php';

var_dump(DB::getInstance([]));

echo '<br/>';

$id = new Ramsey\Uuid\UuidFactory();
$db1 = DB::getInstance([]);

echo $id->uuid4();


echo "somethign";
echo "I have no idea"
?>