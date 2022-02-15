<?php

namespace BedrockStreaming\CodingDojo\KataGreed\Scoring;

use BedrockStreaming\CodingDojo\KataGreed\DiceValuesCounts;
use BedrockStreaming\CodingDojo\KataGreed\ScoringRule;

class One1Rule implements ScoringRule
{
    public function getNumberOfDiceHandled(): int
    {
        return 1;
    }

    public function score(DiceValuesCounts $diceValuesCounts): array
    {
        if ($diceValuesCounts->getNumberOf1() === 1) {
            return [
                'score' => 100,
                'remainingDice' => $diceValuesCounts->removeDice(1),
            ];
        }

        return [
            'score' => 0,
            'remainingDice' => $diceValuesCounts,
        ];
    }
}
