<?php

declare(strict_types=1);

namespace CarChallenge\Domain\Engine;

class Engine implements EngineInterface
{
    private int $speed;
    private string $name;

    public function __construct(int $newSpeed, string $name)
    {
        $this->speed = $newSpeed;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function returnSpeed(): int
    {
        return $this->speed;
    }

    public function returnDrivenDistance($seconds): int
    {
        return $seconds * $this->returnSpeed();
    }
}