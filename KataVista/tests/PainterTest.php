<?php

namespace BedrockStreamingTest\CodingDojo\KataVista;

use BedrockStreaming\CodingDojo\KataVista\Painter;
use PHPUnit\Framework\TestCase;

class PainterTest extends TestCase
{
    use PainterHelperTrait;

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
        $this->helperVistaContainsOneLandmark('meadow');
    }
}
