<?php

namespace BedrockStreamingUtils\CodingDojo\KataVista\Description;

use BedrockStreamingUtils\CodingDojo\KataVista\Description;

abstract class AbstractRule implements Description
{
    // Overwritten in child classes.
    public const LETTER = '';

    public function getLetter(): string
    {
        if (static::LETTER === '') {
            throw new \LogicException('A letter must be defined in each rule, none defined in "'.static::class.'".');
        }

        return static::LETTER;
    }

    public function isDescribed(string ...$configurations): bool
    {
        return in_array($this->getLetter(), $configurations);
    }

    public function isAvailableToDescribe(string ...$configurations): bool
    {
        foreach ($this->getDependencies() as $dependency) {
            if (!in_array($dependency, $configurations)) {
                return false;
            }
        }

        return !$this->isDescribed(...$configurations);
    }

    /**
     * @return array<int, string>
     */
    abstract protected function getDependencies(): array;
}