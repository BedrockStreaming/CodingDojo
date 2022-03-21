<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Pines extends AbstractRule
{
    public const LETTER = 'P';
    public const NAME = 'pines';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Forest::LETTER, Mountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'The "forest" is made of "pines".';
    }
}