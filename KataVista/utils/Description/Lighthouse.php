<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Lighthouse extends AbstractRule
{
    public const LETTER = 'H';
    public const NAME = 'lighthouse';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Ocean::LETTER, Village::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.Lighthouse::NAME.'</> in the <position>background</> of the <landmark>'.Village::NAME.'</>, dominating the <landmark>'.Ocean::NAME.'</>.';
    }
}