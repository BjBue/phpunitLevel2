<?php

#phpinfo();

require_once __DIR__ . '/../vendor/autoload.php';

use mana\App;
use mana\Math;

$app = new App();
echo $app->sayHello();
echo "<hr>";

echo "<h4>fibonacci of 55: ";
$math = new math();
echo $math->fibonacci(55);
echo "</h4>";

echo "<h4>factorial of 5: ";
$math = new math();
echo $math->factorial(5);
echo "</h4>";
