<?php

namespace BedrockStreaming\CodingDojo\KataVista\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;

class Middleground
{
    private Landmark $leftmostLandmark;
    private Landmark $leftLandmark;
    private Landmark $rightLandmark;
    private Landmark $rightmostLandmark;

    public function __construct(
        Landmark $leftmostLandmark,
        Landmark $leftLandmark,
        Landmark $rightLandmark,
        Landmark $rightmostLandmark
    ) {
        $this->leftmostLandmark = $leftmostLandmark;
        $this->leftLandmark = $leftLandmark;
        $this->rightLandmark = $rightLandmark;
        $this->rightmostLandmark = $rightmostLandmark;
    }

    public function describe(): string
    {
        return implode(
            ' ',
            [
                'Next, came',
                $this->leftmostLandmark->describe(),
                'and',
                $this->leftLandmark->describe(),
                'on the left, while there was',
                $this->rightLandmark->describe(),
                'and',
                $this->rightmostLandmark->describe(),
                'on the right.',
            ]
        );
    }
}
