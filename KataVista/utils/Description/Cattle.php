<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Cattle extends AbstractRule
{
    public const LETTER = 'c';
    public const NAME = 'cattle';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There are <landmark>'.Cattle::NAME.'</> on the <position>right</>.';
    }
}