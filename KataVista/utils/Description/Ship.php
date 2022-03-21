<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Ship extends AbstractRule
{
    public const LETTER = 'h';
    public const NAME = 'ship';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Ocean::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "ship" leaving the "ocean" to the right.';
    }
}