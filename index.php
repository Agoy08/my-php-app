<?php
require __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$c = new Calculator();
echo "2 + 3 = " . $c->add(2,3) . PHP_EOL;
