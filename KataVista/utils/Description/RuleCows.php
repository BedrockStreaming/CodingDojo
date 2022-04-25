<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleCows extends AbstractRule
{
    public const LETTER = 'C';
    public const NAME = 'cows';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleCattle::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <landmark>'.RuleCattle::NAME.'</> is mostly <landmark>'.RuleCows::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
        ];
    }
}