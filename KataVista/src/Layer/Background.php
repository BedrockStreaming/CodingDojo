<?php

namespace BedrockStreaming\CodingDojo\KataVista\Layer;

use BedrockStreaming\CodingDojo\KataVista\Landmark;

class Background
{
    private Landmark $leftmostLandmark;
    private Landmark $leftLandmark;
    private Landmark $centralLandmark;
    private Landmark $rightLandmark;
    private Landmark $rightmostLandmark;

    public function __construct(
        Landmark $leftmostLandmark,
        Landmark $leftLandmark,
        Landmark $centralLandmark,
        Landmark $rightLandmark,
        Landmark $rightmostLandmark
    ) {
        $this->leftmostLandmark = $leftmostLandmark;
        $this->leftLandmark = $leftLandmark;
        $this->centralLandmark = $centralLandmark;
        $this->rightLandmark = $rightLandmark;
        $this->rightmostLandmark = $rightmostLandmark;
    }

    public function describe(): string
    {
        return implode(
            ' ',
            [
                'In the background, I could see',
                $this->leftmostLandmark->describe(),
                'and',
                $this->leftLandmark->describe(),
                'on the left, there was',
                $this->centralLandmark->describe(),
                'in front of me, and I could look at',
                $this->rightLandmark->describe(),
                'and',
                $this->rightmostLandmark->describe(),
                'on the right.',
            ]
        );
    }
}
