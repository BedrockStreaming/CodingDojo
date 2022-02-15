<?php

namespace BedrockStreaming\CodingDojo\KataGreed;

class Greed
{
    /**
     * @param array{0: int, 1: int, 2: int, 3: int, 4: int, 5: int} $dice
     */
    public function score(array $dice): int
    {
        $count = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
        ];

        foreach ($dice as $die) {
            $count[$die] = isset($count[$die]) ? $count[$die] + 1 : 1;
        }

        $score = 0;

        if (
            $count[6] === 1 &&
            $count[5] === 1 &&
            $count[4] === 1 &&
            $count[3] === 1 &&
            $count[2] === 1 &&
            $count[1] === 1
        ) {
            return 1200;
        }

        if (
            $count[5] >= 1 &&
            $count[4] >= 1 &&
            $count[3] >= 1 &&
            $count[2] >= 1 &&
            $count[1] >= 1
        ) {
            $score += 600;
            $count[5] -= 1;
            $count[4] -= 1;
            $count[3] -= 1;
            $count[2] -= 1;
            $count[1] -= 1;
        }

        if (
            $count[6] >= 1 &&
            $count[5] >= 1 &&
            $count[4] >= 1 &&
            $count[3] >= 1 &&
            $count[2] >= 1
        ) {
            $score += 600;
            $count[6] -= 1;
            $count[5] -= 1;
            $count[4] -= 1;
            $count[3] -= 1;
            $count[2] -= 1;
        }

        if ($count[1] >= 3) {
            $score += 1000;
        }

        if ($count[2] >= 3) {
            $score += 200;
        }

        if ($count[3] >= 3) {
            $score += 300;
        }

        if ($count[4] >= 3) {
            $score += 400;
        }

        if ($count[5] >= 3) {
            $score += 500;
        }

        if ($count[6] >= 3) {
            $score += 600;
        }

        $occurences = array_count_values($dice);

        $number = 0;
        foreach ($occurences as $occurence) {
            if ($occurence === 2) {
                $number++;
            }
        }

        if (array_search(4, $occurences)) {
            $score = $score * 2;
        }

        if (array_search(5, $occurences)) {
            $score = $score * 4;
        }

        if (array_search(6, $occurences)) {
            $score = $score * 10;
        }

        if ($number === 3) {
            return 800;
        }

        if ($count[1] === 1) {
            $score += 100;
        }

        if ($count[1] === 2) {
            $score += 200;
        }

        if ($count[5] === 1) {
            $score += 50;
        }

        if ($count[5] === 2) {
            $score += 100;
        }

        return $score;
    }
}
