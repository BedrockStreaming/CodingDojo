<?php

namespace BedrockStreaming\CodingDojo\KataVista\Layer;

class Painting
{
    private Foreground $foreground;
    private Middleground $middleground;
    private Background $background;

    public function __construct(
        Foreground $foreground,
        Middleground $middleground,
        Background $background
    ) {
        $this->foreground = $foreground;
        $this->middleground = $middleground;
        $this->background = $background;
    }

    public function describe(): string
    {
        return implode(
            PHP_EOL,
            [
                $this->foreground->describe(),
                $this->middleground->describe(),
                $this->background->describe(),
            ]
        );
    }
}
