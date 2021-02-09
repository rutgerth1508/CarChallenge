<?php


declare(strict_types=1);

use CarChallenge\Domain\Car\Car;
use CarChallenge\Domain\Engine\Engine;
use PHPUnit\Framework\TestCase;

class CarIntegrationTest extends TestCase
{

    public function testDriveMultipleTimes(): void
    {
        $engine = new Engine(100, "V2");
        $car = new Car($engine);
        $car->drive(30);
        $car->drive(30);
        $this->assertSame(6000, $car->returnMileage());
    }

}
