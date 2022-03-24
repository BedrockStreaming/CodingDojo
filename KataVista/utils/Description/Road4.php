<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road4 extends AbstractRule
{
    public const LETTER = '4';
    public const NAME = 'trail';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Tower::LETTER, Road2::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.Road4::NAME.'</> from the <landmark>'.Meadow::NAME.'</> to the <landmark>'.Tower::NAME.'</>.';
    }
}