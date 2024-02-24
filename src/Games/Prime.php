<?php

namespace Php\Project\Prime;

use function cli\line;
use function cli\prompt;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;

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

function checkPrimeGame(): bool
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $correctAnswer = isSimpleNumber($randomNumber) ? 'yes' : 'no';
    line("Question: %s", $randomNumber);
    $gamerAnswer = prompt('Your answer');
    if ($gamerAnswer === $correctAnswer) {
        return true;
    } else {
        line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);
        return false;
    }
}
