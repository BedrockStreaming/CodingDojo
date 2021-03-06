<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleField extends AbstractRule
{
    public const LETTER = 'f';
    public const NAME = 'field';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There are multiple <landmark>'.RuleField::NAME.'</> at <position>first sight</>.';
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
