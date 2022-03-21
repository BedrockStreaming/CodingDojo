<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Lighthouse extends AbstractRule
{
    public const LETTER = 'H';
    public const NAME = 'lighthouse';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Ocean::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "lighthouse" in the background of the "village", dominating the "ocean".';
    }
}