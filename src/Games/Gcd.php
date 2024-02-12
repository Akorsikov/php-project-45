<?php

namespace Php\Project\Gcd;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const START_RANDOM_NUMBER = 4;
const FINISH_RANDOM_NUMBER = 100;
const LOOPS_NUMBER = 5;
const SIMLE_NUMBER =
    [
        2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41,
        43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97
    ];

function notSimleRand(): int
{
    $loopsCounter = 0;
    do {
        $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $loopsCounter++;
    } while (in_array($randomNumber, SIMLE_NUMBER, true) || $loopsCounter <= LOOPS_NUMBER);
    return $randomNumber;
}

function checkGcdGame(): bool
{
    line('Find the greatest common divisor of given numbers.');

    $countCorrectAnswer = 0;

    do {
        $randomNumberOne = notSimleRand();
        $randomNumberTwo = notSimleRand();

        $firstDivisor = ($randomNumberOne < $randomNumberTwo) ? $randomNumberOne : $randomNumberTwo;
        $firstDivisor = floor($firstDivisor / 2);

        for ($i = $firstDivisor; $i > 0; $i--) {
            if ($randomNumberOne % $i === 0 && $randomNumberTwo % $i === 0) {
                $correctAnswer = $i;
                break;
            }
        }

        line("Question: %s %s", $randomNumberOne, $randomNumberTwo);
        $gamerAnswer = prompt('Your answer');
        if ($gamerAnswer === "$correctAnswer") {
            $countCorrectAnswer++;
            line('Correct!');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);

            break;
        }
    } while ($countCorrectAnswer < CORRECT_ANSWER);

    return $countCorrectAnswer === CORRECT_ANSWER;
}
