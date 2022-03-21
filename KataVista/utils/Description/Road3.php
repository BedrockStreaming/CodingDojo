<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road3 extends AbstractRule
{
    public const LETTER = '3';
    public const NAME = 'crossroads';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Road2::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "croassroad" in the middle of the "meadow".';
    }
}