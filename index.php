<?php

require 'vendor/autoload.php';
use Sandhyodip\MyPackage\Math;

$mathObject = new Math();
echo $mathObject->sayHello() . "\n";

$additionResult = $mathObject->addition(5, 10);
echo "Addition Result: " . $additionResult . "\n";