<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleOcean extends AbstractRule
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
        return 'There is an large <landmark>'.RuleOcean::NAME.'</> taking nearly half the width of the <position>background</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_SIMPLE,
            Tips::HELPER_GROUND,
            Tips::HELPER_NUMBER,
            Tips::HELPER_MULTIPLE,
        ];
    }
}
