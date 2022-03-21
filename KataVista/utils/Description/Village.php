<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Village extends AbstractRule
{
    public const LETTER = 'v';
    public const NAME = 'village';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Meadow::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "village" next to the "meadow".';
    }
}