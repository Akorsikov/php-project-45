<?php

namespace Php\Project\Gcd;

use function cli\line;
use function cli\prompt;

const START_RANDOM_NUMBER = 4;
const FINISH_RANDOM_NUMBER = 100;
const LOOPS_NUMBER = 10;

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

function notSimleRand(): int
{
    $loopsCounter = 1;
    do {
        $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $loopsCounter++;
    } while (isSimpleNumber($randomNumber) && $loopsCounter <= LOOPS_NUMBER);
    return $randomNumber;
}

function checkGcdGame(): bool
{
    line('Find the greatest common divisor of given numbers.');

    $randomNumberOne = notSimleRand();
    $randomNumberTwo = notSimleRand();
    $firstDivisor = ($randomNumberOne < $randomNumberTwo) ? $randomNumberOne : $randomNumberTwo;
    $correctAnswer = '1';

    for ($i = $firstDivisor; $i > 0; $i--) {
        if ($randomNumberOne % $i === 0 && $randomNumberTwo % $i === 0) {
            $correctAnswer = (string) $i;
            break;
        }
    }

    line("Question: %s %s", $randomNumberOne, $randomNumberTwo);
    $gamerAnswer = prompt('Your answer');
    if ($gamerAnswer === $correctAnswer) {
        line('Correct!');
        return true;
    } else {
        line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);
        return false;
    }
}
