<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Field extends AbstractRule
{
    public const LETTER = 'f';
    public const NAME = 'field';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There are "fields" at first sight.';
    }
}