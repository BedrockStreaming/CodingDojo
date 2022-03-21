<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Mountain extends AbstractRule
{
    public const LETTER = 'M';
    public const NAME = 'mountain';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There are "mountain" in the background.';
    }
}