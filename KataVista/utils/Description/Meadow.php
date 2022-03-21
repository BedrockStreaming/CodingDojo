<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Meadow extends AbstractRule
{
    public const LETTER = 'm';
    public const NAME = 'meadow';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There is a "meadow".';
    }
}