<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleSwamp extends AbstractRule
{
    public const LETTER = 's';
    public const NAME = 'swamp';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleMountain::LETTER, RuleOcean::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleSwamp::NAME.'</> between the <landmark>'.RuleMountain::NAME.'</> and the <landmark>'.RuleOcean::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_RELATIVE,
        ];
    }
}