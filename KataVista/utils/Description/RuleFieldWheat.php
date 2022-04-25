<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleFieldWheat extends AbstractRule
{
    public const LETTER = 'w';
    public const NAME = 'wheat';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleField::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <position>left</>most <landmark>'.RuleField::NAME.'</> is a <landmark>'.RuleFieldWheat::NAME.'</> field.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_POSITION,
            Tips::HELPER_STACK,
        ];
    }
}