<?php

namespace Php\Project\Gcd;

use function Php\Project\Utils\getGcd;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Find the greatest common divisor of given numbers.';

/**
 * @return array<string>
 */
function checkGcdGame(): array
{
    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);

    $correctAnswer = (string) getGcd($randomNumberOne, $randomNumberTwo);
    $task = "Question: $randomNumberOne $randomNumberTwo";

    return array(CONDITION, $task, $correctAnswer);
}
