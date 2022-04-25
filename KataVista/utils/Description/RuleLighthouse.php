<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleLighthouse extends AbstractRule
{
    public const LETTER = 'H';
    public const NAME = 'lighthouse';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleOcean::LETTER, RuleVillage::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleLighthouse::NAME.'</> in the <position>background</> of the <landmark>'.RuleVillage::NAME.'</>, dominating the <landmark>'.RuleOcean::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
            Tips::HELPER_RELATIVE,
        ];
    }
}