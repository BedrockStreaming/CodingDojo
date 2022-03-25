<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class FieldWheat extends AbstractRule
{
    public const LETTER = 'w';
    public const NAME = 'wheat';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Field::LETTER];
    }

    public function getDescription(): string
    {
        return 'The <position>left</>most <landmark>'.Field::NAME.'</> is a <landmark>'.FieldWheat::NAME.'</> field.';
    }
}