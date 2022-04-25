<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleWindmill extends AbstractRule
{
    public const LETTER = 'W';
    public const NAME = 'windmill';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleField::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleWindmill::NAME.'</> in the <position>middle</> of the <landmark>'.RuleField::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
        ];
    }
}