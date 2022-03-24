<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Road5 extends AbstractRule
{
    public const LETTER = '5';
    public const NAME = 'pathway';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Abbey::LETTER, Road2::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <landmark>'.Road2::NAME.'</> through the meadow forks into a <landmark>'.Road5::NAME.'</> to the <landmark>'.Abbey::NAME.'</>.';
    }
}