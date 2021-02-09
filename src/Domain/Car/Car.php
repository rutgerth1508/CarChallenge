<?php

namespace CarChallenge\Domain\Car;

use CarChallenge\Domain\Engine\EngineInterface;

class Car implements CarInterface
{
    private EngineInterface $currentEngine;
    private int $mileage;

    public function __construct(EngineInterface $newEngine)
    {
        $this->currentEngine = $newEngine;
        $this->mileage = 0;
    }

    public function addMileage($seconds): void
    {
        $this->mileage += $this->currentEngine->returnDrivenDistance($seconds);
    }

    public function returnMileage(): int
    {
        return $this->mileage;
    }

    public function drive(int $seconds): void
    {
        $this->addMileage($seconds);
    }
}
