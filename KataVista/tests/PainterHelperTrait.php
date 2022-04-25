<?php

namespace BedrockStreamingTest\CodingDojo\KataVista;

use BedrockStreaming\CodingDojo\KataVista\Painter;

trait PainterHelperTrait
{
    private function helperVistaContainsOneLandmark(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$landmark.'.*#',
            $painter->captureVista()->describe()
        );
    }

    private function helperVistaContainsMultipleLandmark(string $landmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*'.$landmark.'.*'.$landmark.'.*#',
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
            '#left, .*'.$landmark.' (?:and .*)?on the right\.#',
            $painter->captureVista()->describe()
        );
    }

    private function helperVistaContainsStackedLandmark(string $landmark, string $stackedLandmark): void
    {
        $painter = new Painter();

        self::assertMatchesRegularExpression(
            '#.*(?:'.$landmark.'[\w\s]+'.$stackedLandmark.'|'.$stackedLandmark.'[\w\s]+'.$landmark.').*#',
            $painter->captureVista()->describe()
        );
    }
}
