<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleTower extends AbstractRule
{
    public const LETTER = 'T';
    public const NAME = 'tower';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleMountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleTower::NAME.'</> on the rightmost <landmark>'.RuleMountain::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
        ];
    }
}