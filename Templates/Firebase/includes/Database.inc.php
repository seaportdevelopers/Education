<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('/path/to/firebase_credentials.json')
    ->withDatabaseUri('https://my-project.firebaseio.com');

$database = $factory->createDatabase();