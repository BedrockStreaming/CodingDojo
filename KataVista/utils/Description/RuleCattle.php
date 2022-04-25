<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleCattle extends AbstractRule
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
        return 'There are <landmark>'.RuleCattle::NAME.'</> on the <position>right</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_SIMPLE,
            Tips::HELPER_POSITION,
        ];
    }
}