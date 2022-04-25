<?php

namespace BedrockStreamingTest\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;
use BedrockStreaming\CodingDojo\KataVista\Layer\Background;
use PHPUnit\Framework\TestCase;

class BackgroundTest extends TestCase
{
    public function testDescription(): void
    {
        $landmarkMock = $this->createMock(Landmark::class);
        $landmarkMock->method('describe')->willReturn('a land spot');

        $background = new Background($landmarkMock, $landmarkMock, $landmarkMock, $landmarkMock, $landmarkMock);

        self::assertSame(
            $background->describe(),
            'In the background, I could see a land spot and a land spot on the left, there was a land spot in front of me, and I could look at a land spot and a land spot on the right.',
        );
    }
}
