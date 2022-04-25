<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RulePines extends AbstractRule
{
    public const LETTER = 'P';
    public const NAME = 'pines';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleForest::LETTER, RuleMountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <landmark>'.RuleForest::NAME.'</> in front of the <landmark>'.RuleMountain::NAME.'</> is made of <landmark>'.RulePines::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
            Tips::HELPER_RELATIVE,
        ];
    }
}