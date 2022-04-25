<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleRoad4 extends AbstractRule
{
    public const LETTER = '4';
    public const NAME = 'trail';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleTower::LETTER, RuleRoad2::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleRoad4::NAME.'</> from the <landmark>'.RuleMeadow::NAME.'</> to the <landmark>'.RuleTower::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::YOLO,
        ];
    }
}
