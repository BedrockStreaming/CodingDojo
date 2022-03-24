<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

use BedrockStreamingUtils\CodingDojo\KataVista\Description;

abstract class AbstractRule implements Description
{
    // Overwritten in child classes.
    public const LETTER = '';
    public const NAME = '';

    public function getLetter(): string
    {
        if (static::LETTER === '') {
            throw new \LogicException('A letter must be defined in each description, none defined in "'.static::class.'".');
        }

        return static::LETTER;
    }

    public function getName(): string
    {
        if (static::NAME === '') {
            throw new \LogicException('A name must be defined in each description, none defined in "'.static::class.'".');
        }

        return static::NAME;
    }

    public function isDescribed(string ...$descriptionLetters): bool
    {
        return in_array($this->getLetter(), $descriptionLetters);
    }

    public function isAvailableToDescribe(string ...$descriptionLetters): bool
    {
        foreach ($this->getDependencies() as $dependency) {
            if (!in_array($dependency, $descriptionLetters)) {
                return false;
            }
        }

        return !$this->isDescribed(...$descriptionLetters);
    }

    /**
     * @return array<int, string>
     */
    abstract protected function getDependencies(): array;
}