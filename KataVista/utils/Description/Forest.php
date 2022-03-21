<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Forest extends AbstractRule
{
    public const LETTER = 'F';
    public const NAME = 'forest';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There is a "forest" on the left.';
    }
}