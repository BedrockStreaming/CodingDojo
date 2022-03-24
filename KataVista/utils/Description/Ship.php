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
        return 'There is a <landmark>'.Ship::NAME.'</> leaving the <landmark>'.Ocean::NAME.'</> to the <position>right</>.';
    }
}