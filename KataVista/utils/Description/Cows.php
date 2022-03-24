<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Cows extends AbstractRule
{
    public const LETTER = 'C';
    public const NAME = 'cows';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Cattle::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <landmark>'.Cattle::NAME.'</> is mostly <landmark>'.Cows::NAME.'</>.';
    }
}