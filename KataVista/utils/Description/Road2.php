<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road2 extends AbstractRule
{
    public const LETTER = '2';
    public const NAME = 'road';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Forest::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "road" going from the "village" to the "forest" through the "meadow".';
    }
}