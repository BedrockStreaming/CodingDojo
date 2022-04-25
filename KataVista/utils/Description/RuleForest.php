<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleForest extends AbstractRule
{
    public const LETTER = 'F';
    public const NAME = 'forest';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.RuleForest::NAME.'</> on the <position>left</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_SIMPLE,
            Tips::HELPER_POSITION,
        ];
    }
}
