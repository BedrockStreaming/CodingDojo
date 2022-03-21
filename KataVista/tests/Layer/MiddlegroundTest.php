<?php

namespace BedrockStreamingTest\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;
use BedrockStreaming\CodingDojo\KataVista\Layer\Middleground;
use PHPUnit\Framework\TestCase;

class MiddlegroundTest extends TestCase
{
    public function testDescription(): void
    {
        $landmarkMock = $this->createMock(Landmark::class);
        $landmarkMock->method('describe')->willReturn('a land spot');

        $middleground = new Middleground($landmarkMock, $landmarkMock, $landmarkMock, $landmarkMock);

        self::assertSame(
            $middleground->describe(),
            'Next, came a land spot and a land spot on the left, while there was a land spot and a land spot on the right.',
        );
    }
}
