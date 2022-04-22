<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleMountain extends AbstractRule
{
    public const LETTER = 'M';
    public const NAME = 'mountain';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return 'There are multiple <landmark>'.RuleMountain::NAME.'</> in the <position>background</>.';
    }
}