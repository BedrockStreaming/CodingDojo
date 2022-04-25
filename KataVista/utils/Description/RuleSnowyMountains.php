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
        return 'The leftmost <landmark>'.RuleMountain::NAME.'</> is covered in <landmark>'.RuleSnowyMountains::NAME.'</>.';
    }

    public function getTips(): array
    {
        return [
            Tips::HELPER_STACK,
        ];
    }
}
