<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleFieldBarley extends AbstractRule
{
    public const LETTER = 'b';
    public const NAME = 'barley';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleField::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is <landmark>'.RuleFieldBarley::NAME.'</> in the <position>right</>most <landmark>'.RuleField::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_POSITION,
            Tips::HELPER_STACK
        ];
    }
}