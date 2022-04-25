<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleRoad5 extends AbstractRule
{
    public const LETTER = '5';
    public const NAME = 'pathway';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleAbbey::LETTER, RuleRoad2::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <landmark>'.RuleRoad2::NAME.'</> through the meadow forks into a <landmark>'.RuleRoad5::NAME.'</> to the <landmark>'.RuleAbbey::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::YOLO,
        ];
    }
}
