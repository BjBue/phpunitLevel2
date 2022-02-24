<?php

#phpinfo();

require_once __DIR__ . '/../vendor/autoload.php';

use mana\App;
use mana\Math;
use mana\Logger;
use mana\AppWithLogger;

//the app
$app = new App();
echo $app->sayHello();
echo "<hr>";

//the math
echo "<h4>fibonacci of 25: ";
$math = new math();
echo $math->fibonacci(25);
echo "</h4>";

echo "<hr>";

echo "<h4>factorial of 5: ";
$math = new math();
echo $math->factorial(5);
echo "</h4>";

echo "<hr>";

echo "<h4>fibonacci from 1 to 25: </h4>";
$math = new math();
echo "<ul>";
for ($i=1, $j=25; $i<=$j; $i++) {
    echo "<li>" . $math->fibonacci($i) . "</li>";
}
echo "</ul>";

echo "<hr>";
//the app with logger
$Logger = new Logger();
$AppWithLogger = new AppWithLogger();
$AppWithLogger->run($Logger);


