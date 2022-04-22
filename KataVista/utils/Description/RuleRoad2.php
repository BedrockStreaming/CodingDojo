<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleRoad2 extends AbstractRule
{
    public const LETTER = '2';
    public const NAME = 'road';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleForest::LETTER, RuleVillage::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleRoad2::NAME.'</> going from the <landmark>'.RuleVillage::NAME.'</> to the <landmark>'.RuleForest::NAME.'</> through the <landmark>'.RuleMeadow::NAME.'</>.';
    }
}