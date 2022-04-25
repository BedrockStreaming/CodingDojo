<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleDerelictShip extends AbstractRule
{
    public const LETTER = 'd';
    public const NAME = 'derelict ship';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleSwamp::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>derelict ship</> in the <landmark>'.RuleSwamp::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
        ];
    }
}
