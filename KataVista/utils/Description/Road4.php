<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road4 extends AbstractRule
{
    public const LETTER = '4';
    public const NAME = 'trail';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Tower::LETTER, Road2::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "trail" from the "meadow" to the "tower".';
    }
}