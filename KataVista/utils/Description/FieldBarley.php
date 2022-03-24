<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

class FieldBarley extends AbstractRule
{
    public const LETTER = 'b';
    public const NAME = 'barley';

    /**
     * @return array<int, string>
     */
    protected function getDependencies(): array
    {
        return [Field::LETTER];
    }

    public function getDescription(): string
    {
        return 'There is <landmark>'.FieldBarley::NAME.'</> in the <position>right</>most <landmark>'.Field::NAME.'</>.';
    }
}