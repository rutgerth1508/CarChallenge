<?php

namespace CarChallenge\Domain\Engine;

interface EngineInterface
{
    public function getName(): string;

    public function returnDrivenDistance($seconds): int;

    public function returnSpeed(): int;
}