<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('fir-6b031-firebase-adminsdk-fbsvc-e1ee094c2c.json')
    ->withDatabaseUri('https://fir-6b031-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
