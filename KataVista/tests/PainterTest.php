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
        $this->helperVistaContainsOneLandmark('meadow');
    }

    // Helper functions below.

    private function helperVistaContainsOneLandmark(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$landmark.'.*#',
            $painter->captureVista()->describe()
        );
    }

    private function helperVistaContainsLandmarkInTheForeground(string $landmark): void
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

    private function helperVistaContainsLandmarkInTheMiddleground(string $landmark): void
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

    private function helperVistaContainsLandmarkInTheBackground(string $landmark): void
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

    private function helperVistaContainsLandmarkOnTheLeft(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#'.$landmark.' (?:and .*)?on the left,#',
            $painter->captureVista()->describe()
        );
    }

    private function helperVistaContainsLandmarkInTheCenter(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#'.$landmark.' (?:in the middle,|in front of me)#',
            $painter->captureVista()->describe()
        );
    }

    private function helperVistaContainsLandmarkOnTheRight(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#left, .*'.$landmark.' (?:and .*)?on the right.#',
            $painter->captureVista()->describe()
        );
    }
}
