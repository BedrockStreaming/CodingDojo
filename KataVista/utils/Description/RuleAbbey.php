<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleAbbey extends AbstractRule
{
    public const LETTER = 'A';
    public const NAME = 'abbey';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleMeadow::LETTER, RuleForest::LETTER, RuleVillage::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is an <landmark>'.RuleAbbey::NAME.'</> in the <landmark>'.RuleMeadow::NAME.'</> between the <landmark>'.RuleForest::NAME.'</> and the <landmark>'.RuleVillage::NAME.'</>.';
    }
}