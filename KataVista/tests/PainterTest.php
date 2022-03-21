<?php

namespace BedrockStreamingTest;

use BedrockStreaming\CodingDojo\KataVista\Painter;
use PHPUnit\Framework\TestCase;

class PainterTest extends TestCase
{
    public function testVistaConfiguration(): void
    {
        $camera = new Painter();

        self::assertMatchesRegularExpression(
            $this->buildRegularExpression(),
            $camera->captureVista()->describe()
        );
    }

    /**
     * @todo remove this test once the kata is started
     */
    public function testVistaIsFoggyByDefault(): void
    {
        $camera = new Painter();

        $fogMatcher = '(?:fog)';

        self::assertMatchesRegularExpression(
            $this->buildRegularExpression($fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher, $fogMatcher),
            $camera->captureVista()->describe()
        );
    }

    private function buildRegularExpression(
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
    ): string {
        $matches = [
            '(?:At first sight there was )',
            $f1,
            '(?: , )',
            $f2,
            '(?: and )',
            $f3,
            "(?: \.)",
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
            '(?:In the background, on the left, I could see )',
            $b1,
            '(?: and )',
            $b2,
            '(?: , in front of me there was )',
            $b3,
            '(?: and on the right I could look at )',
            $b4,
            '(?: and )',
            $b5,
            "(?: \.)",
        ];

        return '#^'.implode('', $matches).'$#';
    }
}
