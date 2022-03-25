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
        return 'There is a <landmark>'.Windmill::NAME.'</> in the <position>middle</> of the <landmark>'.Field::NAME.'</>.';
    }
}