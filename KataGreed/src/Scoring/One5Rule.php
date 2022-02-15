<?php

namespace BedrockStreaming\CodingDojo\KataGreed\Scoring;

use BedrockStreaming\CodingDojo\KataGreed\DiceValuesCounts;
use BedrockStreaming\CodingDojo\KataGreed\ScoringRule;

class One5Rule implements ScoringRule
{
    public function getNumberOfDiceHandled(): int
    {
        return 1;
    }

    public function score(DiceValuesCounts $diceValuesCounts): array
    {
        if ($diceValuesCounts->getNumberOf5() === 1) {
            return [
                'score' => 50,
                'remainingDice' => $diceValuesCounts->removeDice(5),
            ];
        }

        return [
            'score' => 0,
            'remainingDice' => $diceValuesCounts,
        ];
    }
}
