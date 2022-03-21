<?php

namespace BedrockStreaming\CodingDojo\KataVista;

use BedrockStreaming\CodingDojo\KataVista\Landmark\Fog;
use BedrockStreaming\CodingDojo\KataVista\Layer\Background;
use BedrockStreaming\CodingDojo\KataVista\Layer\Foreground;
use BedrockStreaming\CodingDojo\KataVista\Layer\Middleground;
use BedrockStreaming\CodingDojo\KataVista\Layer\Painting;

class Painter
{
    public function captureVista(): Painting
    {
        return new Painting(
            new Foreground(
                new Fog(),
                new Fog(),
                new Fog(),
            ),
            new Middleground(
                new Fog(),
                new Fog(),
                new Fog(),
                new Fog(),
            ),
            new Background(
                new Fog(),
                new Fog(),
                new Fog(),
                new Fog(),
                new Fog(),
            ),
        );
    }
}
