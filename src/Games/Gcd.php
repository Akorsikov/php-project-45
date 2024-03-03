<?php

namespace Php\Project\Gcd;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Find the greatest common divisor of given numbers.';

/**
 * @return array<string>
 */
function checkGcdGame(): array
{
    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $firstDivisor = ($randomNumberOne < $randomNumberTwo) ? $randomNumberOne : $randomNumberTwo;
    $correctAnswer = '1';

    for ($i = $firstDivisor; $i > 0; $i--) {
        if ($randomNumberOne % $i === 0 && $randomNumberTwo % $i === 0) {
            $correctAnswer = (string) $i;
            break;
        }
    }
    $task = "Question: $randomNumberOne $randomNumberTwo";

    return array(CONDITION, $task, $correctAnswer);
}
