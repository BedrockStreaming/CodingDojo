<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Ocean extends AbstractRule
{
    public const LETTER = 'O';
    public const NAME = 'ocean';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There is an large <landmark>'.Ocean::NAME.'</> taking half the width in the <position>background</>.';
    }
}