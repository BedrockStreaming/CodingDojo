<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class RuleSnowyMountains extends AbstractRule
{
    public const LETTER = 'S';
    public const NAME = 'snow';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [RuleMountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <position>left</>most <landmark>'.RuleMountain::NAME.'</> is covered in <landmark>'.RuleSnowyMountains::NAME.'</>.';
    }
}