<?php

namespace CarChallenge\Domain\Car;

interface CarInterface
{
    public function drive(int $seconds): void;

    public function returnMileage(): int;

    public function addMileage(int $seconds): void;
}
