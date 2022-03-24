<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Tower extends AbstractRule
{
    public const LETTER = 'T';
    public const NAME = 'tower';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Mountain::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a <landmark>'.Tower::NAME.'</> on the <position>right</>most <landmark>'.Mountain::NAME.'</>.';
    }
}