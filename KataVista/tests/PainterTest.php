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

    private function testVistaContainsOneLandmark(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$landmark.'.*#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkInTheForeground(string $landmark): void
    {
        $painter = new Painter();

        $matches = [
            '(?:At first sight there was )',
            '(?:.+)?',
            $landmark,
            '(?:.+)?',
            '\n',
            '.*',
            '\n',
            '.*',
        ];

        self::assertMatchesRegularExpression(
            '#^'.implode('', $matches).'$#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkInTheMiddleground(string $landmark): void
    {
        $painter = new Painter();

        $matches = [
            '.*',
            '\n',
            '(?:Next, came )',
            '(?:.+)?',
            $landmark,
            '(?:.+)?',
            '\n',
            '.*',
        ];

        self::assertMatchesRegularExpression(
            '#^'.implode('', $matches).'$#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkInTheBackground(string $landmark): void
    {
        $painter = new Painter();

        $matches = [
            '.*',
            '\n',
            '.*',
            '\n',
            '(?:In the background, I could see )',
            '(?:.+)?',
            $landmark,
            '(?:.+)?',
        ];

        self::assertMatchesRegularExpression(
            '#^'.implode('', $matches).'$#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkOnTheLeft(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#'.$landmark.' (?:and .*)?on the left,#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkInTheCenter(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#'.$landmark.' (?:in the middle,|in front of me)#',
            $painter->captureVista()->describe()
        );
    }

    private function testVistaContainsLandmarkOnTheRight(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#left, .*'.$landmark.' (?:and .*)?on the right.#',
            $painter->captureVista()->describe()
        );
    }
}
