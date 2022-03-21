<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

interface Description
{
    public function getLetter(): string;

    public function isDescribed(string ...$configurations): bool;

    public function isAvailableToDescribe(string ...$configurations): bool;

    public function getDescription(): string;
}