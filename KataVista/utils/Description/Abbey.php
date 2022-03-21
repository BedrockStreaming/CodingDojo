<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Abbey extends AbstractRule
{
    public const LETTER = 'A';
    public const NAME = 'abbey';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Meadow::LETTER, Forest::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is an "abbey" in the "meadow" between the "forest" and the "village".';
    }
}