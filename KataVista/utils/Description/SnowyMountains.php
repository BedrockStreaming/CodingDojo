<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class SnowyMountains extends AbstractRule
{
    public const LETTER = 'S';
    public const NAME = 'snow';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Mountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <position>left</>most <landmark>'.Mountain::NAME.'</> is covered in <landmark>'.SnowyMountains::NAME.'</>.';
    }
}