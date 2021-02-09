<?php

use CarChallenge\Domain\Engine\Engine;
use PHPUnit\Framework\TestCase;

class EngineTest extends TestCase
{
    public function testGetName(): void
    {
        $engine = new Engine(150, 'V1');

        $this->assertSame('V1', $engine->getName());
    }

    public function testReturnSpeed(): void
    {
        $engine = new Engine(150, 'V1');

        $this->assertSame(150, $engine->returnSpeed());
    }

    public function testReturnDrivenDistance(): void
    {
        $engine = new Engine(150, "V1");

        $this->assertEquals(15000, $engine->returnDrivenDistance(100));
    }
}
