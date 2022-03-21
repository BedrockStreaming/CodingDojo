<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Swamp extends AbstractRule
{
    public const LETTER = 's';
    public const NAME = 'swamp';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Mountain::LETTER, Ocean::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "swamp" between the "mountain" and the "ocean".';
    }
}