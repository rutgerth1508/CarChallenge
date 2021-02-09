<?php

use CarChallenge\Domain\Car\Car;
use CarChallenge\Domain\Engine\Engine;

require_once __DIR__ . '/../vendor/autoload.php';

$V1 = new Engine(150, "V1");

echo $V1->getName() . "\n";

$volkswagenV1 = new Car($V1);

$volkswagenV1->drive(60);

echo $volkswagenV1->returnMileage();
