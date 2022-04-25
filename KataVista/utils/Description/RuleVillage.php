<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleVillage extends AbstractRule
{
    public const LETTER = 'v';
    public const NAME = 'village';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleMeadow::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleVillage::NAME.'</> on the <position>right</position> of the <landmark>'.RuleMeadow::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_POSITION,
            Tips::HELPER_RELATIVE,
        ];
    }
}
