<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road2 extends AbstractRule
{
    public const LETTER = '2';
    public const NAME = 'road';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Forest::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.Road2::NAME.'</> going from the <landmark>'.Village::NAME.'</> to the <landmark>'.Forest::NAME.'</> through the <landmark>'.Meadow::NAME.'</>.';
    }
}