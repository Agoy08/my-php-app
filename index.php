<?php
require __DIR__ . '/vendor/autoload.php';

use App\Calculator;

$c = new Calculator();
echo "jenkins" . $c->add(2,3) . PHP_EOL;
