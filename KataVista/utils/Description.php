<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista;

interface Description
{
    public function getLetter(): string;

    public function getName(): string;

    public function isDescribed(string ...$descriptionLetters): bool;

    public function isAvailableToDescribe(string ...$descriptionLetters): bool;

    public function getDescription(): string;

    /**
     * @return array<int, string>
     */
    public function getTips(): array;
}
