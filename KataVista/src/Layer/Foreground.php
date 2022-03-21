<?php

namespace BedrockStreaming\CodingDojo\KataVista\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;

class Foreground
{
    private Landmark $leftLandmark;
    private Landmark $centralLandmark;
    private Landmark $rightLandmark;

    public function __construct(
        Landmark $leftLandmark,
        Landmark $centralLandmark,
        Landmark $rightLandmark
    ) {
        $this->leftLandmark = $leftLandmark;
        $this->centralLandmark = $centralLandmark;
        $this->rightLandmark = $rightLandmark;
    }

    public function describe(): string
    {
        return implode(
            ' ',
            [
                'At first sight there was',
                $this->leftLandmark->describe(),
                ',',
                $this->centralLandmark->describe(),
                'and',
                $this->rightLandmark->describe(),
                '.',
            ]
        );
    }
}
