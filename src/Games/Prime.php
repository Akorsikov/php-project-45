<?php

namespace Php\Project\Prime;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isSimpleNumber(int $number): bool
{
    $halfNumber = floor($number / 2);
    for ($i = $halfNumber; $i > 1; $i--) {
        if ($number % $i === 0 && $i > 1) {
            return false;
        }
    }
    return true;
}

/**
 * @return array<string>
 */
function checkPrimeGame(): array
{
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $correctAnswer = isSimpleNumber($randomNumber) ? 'yes' : 'no';
    $task = "Question: $randomNumber";

    return array(CONDITION, $task, $correctAnswer);
}
