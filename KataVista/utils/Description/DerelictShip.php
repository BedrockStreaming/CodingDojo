<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class DerelictShip extends AbstractRule
{
    public const LETTER = 'd';
    public const NAME = 'derelict ship';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Swamp::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>derelict ship</> in the <landmark>'.Swamp::NAME.'</>.';
    }
}