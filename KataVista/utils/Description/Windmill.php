<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class Windmill extends AbstractRule
{
    public const LETTER = 'W';
    public const NAME = 'windmill';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Field::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is a "windmill" in the middle of the "fields".';
    }
}