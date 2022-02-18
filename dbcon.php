<?php

require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$factory = (new Factory)
->withServiceAccount('belajar-24497-firebase-adminsdk-csy7f-1458280b9e.json')
->withDatabaseUri('https://test-f2700-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();


?>
