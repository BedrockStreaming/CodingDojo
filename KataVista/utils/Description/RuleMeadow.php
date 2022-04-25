<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleMeadow extends AbstractRule
{
    public const LETTER = 'm';
    public const NAME = 'meadow';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleMeadow::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_SIMPLE,
        ];
    }
}