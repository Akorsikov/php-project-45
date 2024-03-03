<?php

namespace Php\Project\Gcd;

const START_RANDOM_NUMBER = 4;
const FINISH_RANDOM_NUMBER = 100;
const LOOPS_NUMBER = 10;
const CONDITION = 'Find the greatest common divisor of given numbers.';

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

function getNotSimleRand(): int
{
    $loopsCounter = 1;
    do {
        $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $loopsCounter++;
    } while (isSimpleNumber($randomNumber) && $loopsCounter <= LOOPS_NUMBER);
    return $randomNumber;
}

/**
 * @return array<string>
 */
function checkGcdGame(): array
{

    $randomNumberOne = getNotSimleRand();
    $randomNumberTwo = getNotSimleRand();
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
