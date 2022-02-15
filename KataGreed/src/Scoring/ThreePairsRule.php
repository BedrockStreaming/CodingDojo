<?php

namespace BedrockStreaming\CodingDojo\KataGreed\Scoring;

use BedrockStreaming\CodingDojo\KataGreed\DiceValuesCounts;
use BedrockStreaming\CodingDojo\KataGreed\ScoringRule;

class ThreePairsRule implements ScoringRule
{
    public function getNumberOfDiceHandled(): int
    {
        return 6;
    }

    public function score(DiceValuesCounts $diceValuesCounts): array
    {
        if ($diceValuesCounts->getNumberOfPairs() === 3) {
            return [
                'score' => 800,
                'remainingDice' => DiceValuesCounts::buildFromDice(),
            ];
        }

        return [
            'score' => 0,
            'remainingDice' => $diceValuesCounts,
        ];
    }
}
