<?php

namespace BedrockStreamingTest\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;
use BedrockStreaming\CodingDojo\KataVista\Layer\Foreground;
use PHPUnit\Framework\TestCase;

class ForegroundTest extends TestCase
{
    public function testDescription(): void
    {
        $landmarkMock = $this->createMock(Landmark::class);
        $landmarkMock->method('describe')->willReturn('a land spot');

        $foreground = new Foreground($landmarkMock, $landmarkMock, $landmarkMock);

        self::assertSame(
            $foreground->describe(),
            'At first sight there was a land spot on the left, a land spot in the middle, and a land spot on the right.',
        );
    }
}
