<?php

require_once "Employee.php";
require_once "Intern.php";
require_once "Manager.php";

$intern1 = new Intern('Antanas', 800);
$manager1 = new Manager('Jonas', 2000, 3);

echo $intern1 . PHP_EOL;
echo $manager1 . PHP_EOL;

echo $intern1->calculateSalary() . PHP_EOL;
echo $manager1->calculateSalary() . PHP_EOL;

echo Intern::getTypeDescription() . PHP_EOL;
echo Manager::getTypeDescription() . PHP_EOL;

$intern2 = clone $intern1;

echo $intern2;

