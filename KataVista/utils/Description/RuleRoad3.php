<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleRoad3 extends AbstractRule
{
    public const LETTER = '3';
    public const NAME = 'crossroads';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleRoad2::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleRoad3::NAME.'</> inside the <landmark>'.RuleMeadow::NAME.'</>.';
    }
}