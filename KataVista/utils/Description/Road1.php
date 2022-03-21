<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road1 extends AbstractRule
{
    public const LETTER = '1';
    public const NAME = 'path';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Windmill::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "path" going from the "windmill" to the "village".';
    }
}