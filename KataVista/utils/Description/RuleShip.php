<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleShip extends AbstractRule
{
    public const LETTER = 'h';
    public const NAME = 'ship';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleOcean::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleShip::NAME.'</> leaving the <landmark>'.RuleOcean::NAME.'</> to the <position>right</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_POSITION,
            Tips::HELPER_STACK,
            Tips::HELPER_RELATIVE,
        ];
    }
}