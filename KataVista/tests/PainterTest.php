<?php

namespace BedrockStreamingTest;

use BedrockStreaming\CodingDojo\KataVista\Painter;
use PHPUnit\Framework\TestCase;

class PainterTest extends TestCase
{
    public function testVistaConfiguration(): void
    {
        $this->testVistaContainsPlacedLandmarks();
    }

    public function testVistaContainsAMeadow(): void
    {
        $this->testVistaContainsOneLandmark('meadow');
    }

    private function testVistaContainsOneLandmark(string $element): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$element.'.*#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsPlacedLandmarks(
        string $f1 = '(?:.+)',
        string $f2 = '(?:.+)',
        string $f3 = '(?:.+)',
        string $m1 = '(?:.+)',
        string $m2 = '(?:.+)',
        string $m3 = '(?:.+)',
        string $m4 = '(?:.+)',
        string $b1 = '(?:.+)',
        string $b2 = '(?:.+)',
        string $b3 = '(?:.+)',
        string $b4 = '(?:.+)',
        string $b5 = '(?:.+)'
    ): void {
        $painter = new Painter();

        $matches = [
            '(?:At first sight there was )',
            $f1,
            '(?: on the left, )',
            $f2,
            '(?: in the middle, and )',
            $f3,
            "(?: on the right\.)",
            '\n',
            '(?:Next, came )',
            $m1,
            '(?: and )',
            $m2,
            '(?: on the left, while there was )',
            $m3,
            '(?: and )',
            $m4,
            "(?: on the right\.)",
            '\n',
            '(?:In the background, I could see )',
            $b1,
            '(?: and )',
            $b2,
            '(?: on the left, there was )',
            $b3,
            '(?: in front of me, and I could look at )',
            $b4,
            '(?: and )',
            $b5,
            "(?: on the right\.)",
        ];

        self::assertMatchesRegularExpression(
            '#^'.implode('', $matches).'$#',
            $painter->captureVista()->describe()
        );
    }
}
