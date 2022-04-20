<?php

namespace BedrockStreamingTest;

use BedrockStreaming\CodingDojo\KataVista\Painter;
use PHPUnit\Framework\TestCase;

class PainterTest extends TestCase
{
    public function testVistaContains12Landmarks(): void
    {
        $painter = new Painter();

        $anyLandmarkMatcher = '(?:.*)';

        $matches = [
            '(?:At first sight there was )',
            $anyLandmarkMatcher,
            '(?: on the left, )',
            $anyLandmarkMatcher,
            '(?: in the middle, and )',
            $anyLandmarkMatcher,
            "(?: on the right\.)",
            '\n',
            '(?:Next, came )',
            $anyLandmarkMatcher,
            '(?: and )',
            $anyLandmarkMatcher,
            '(?: on the left, while there was )',
            $anyLandmarkMatcher,
            '(?: and )',
            $anyLandmarkMatcher,
            "(?: on the right\.)",
            '\n',
            '(?:In the background, I could see )',
            $anyLandmarkMatcher,
            '(?: and )',
            $anyLandmarkMatcher,
            '(?: on the left, there was )',
            $anyLandmarkMatcher,
            '(?: in front of me, and I could look at )',
            $anyLandmarkMatcher,
            '(?: and )',
            $anyLandmarkMatcher,
            "(?: on the right\.)",
        ];

        self::assertMatchesRegularExpression(
            '#^'.implode('', $matches).'$#',
            $painter->captureVista()->describe()
        );
    }

    public function testVistaContainsAMeadow(): void
    {
        $this->testVistaContainsOneLandmark('meadow');
    }

    // Helper functions.

    private function testVistaContainsOneLandmark(string $element): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$element.'.*#',
            $painter->captureVista()->describe()
        );
    }
}
