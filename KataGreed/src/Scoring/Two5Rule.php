<?php

namespace BedrockStreaming\CodingDojo\KataGreed\Scoring;

use BedrockStreaming\CodingDojo\KataGreed\DiceValuesCounts;
use BedrockStreaming\CodingDojo\KataGreed\ScoringRule;

class Two5Rule implements ScoringRule
{
    public function getNumberOfDiceHandled(): int
    {
        return 2;
    }

    public function score(DiceValuesCounts $diceValuesCounts): array
    {
        if ($diceValuesCounts->getNumberOf5() === 2) {
            return [
                'score' => 100,
                'remainingDice' => $diceValuesCounts->removeDice(5, 5),
            ];
        }

        return [
            'score' => 0,
            'remainingDice' => $diceValuesCounts,
        ];
    }
}
