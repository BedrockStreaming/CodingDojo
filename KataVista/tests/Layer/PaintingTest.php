<?php

namespace BedrockStreamingTest\Layer;

use BedrockStreaming\CodingDojo\KataVista\Layer\Background;
use BedrockStreaming\CodingDojo\KataVista\Layer\Foreground;
use BedrockStreaming\CodingDojo\KataVista\Layer\Middleground;
use BedrockStreaming\CodingDojo\KataVista\Layer\Painting;
use PHPUnit\Framework\TestCase;

class PaintingTest extends TestCase
{
    public function testDescription(): void
    {
        $foregroundMock = $this->createMock(Foreground::class);
        $foregroundMock->method('describe')->willReturn('foreground');
        $middlegroundMock = $this->createMock(Middleground::class);
        $middlegroundMock->method('describe')->willReturn('middleground');
        $backgroundMock = $this->createMock(Background::class);
        $backgroundMock->method('describe')->willReturn('background');

        $vista = new Painting($foregroundMock, $middlegroundMock, $backgroundMock);

        self::assertSame(
            $vista->describe(),
<<<EXPECTATION
foreground
middleground
background
EXPECTATION
        );
    }
}
