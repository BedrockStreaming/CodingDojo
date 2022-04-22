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
        return 'The <landmark>'.RuleForest::NAME.'</> is made of <landmark>'.RulePines::NAME.'</>.';
    }
}