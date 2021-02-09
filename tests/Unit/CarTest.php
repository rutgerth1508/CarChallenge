<?php

declare(strict_types=1);

use CarChallenge\Domain\Car\Car;
use CarChallenge\Domain\Engine\EngineInterface;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{

    public function testDriveMultipleTimes(): void
    {
        $stubEngine = $this->getMockBuilder(EngineInterface::class)->getMock();
        $stubEngine->expects($this->exactly(2))->method('returnDrivenDistance')->willReturn(500);
        $car = new Car($stubEngine);
        $car->drive(60);
        $car->drive(60);
        $this->assertSame(1000, $car->returnMileage());
    }

//    public function dataProviderForTestDriveForRandomAmountOfSeconds(): array
//    {
//        return [
//            [
//                150,
//                "V1"
//            ],
//            [
//                30,
//                "V2"
//            ]
//        ];
//    }

//    public function testMock(): void
//    {
//        $stubEngine = $this->createMock(Engine::class);
//        $stubEngine->method('getName')
//            ->willReturn('V1');
//        $stubEngine->method('returnDrivenDistance')
//            ->willReturn(5000);
//        $this->assertSame(5000, $stubEngine->returnDrivenDistance(100));
//    }
}
