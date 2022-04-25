<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleRoad1 extends AbstractRule
{
    public const LETTER = '1';
    public const NAME = 'path';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleWindmill::LETTER, RuleVillage::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleRoad1::NAME.'</> going from the <landmark>'.RuleWindmill::NAME.'</> to the <landmark>'.RuleVillage::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::YOLO,
        ];
    }
}