<?php

namespace Php\Project\Prime;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;
const PRIME_NUMBERS =
    [
        2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41,
        43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97
    ];

function checkPrimeGame(): bool
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $countCorrectAnswer = 0;

    do {
        $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $isPrimeNumber = in_array($randomNumber, PRIME_NUMBERS);
        $correctAnswer = $isPrimeNumber ? 'yes' : 'no';
        line("Question: %s", $randomNumber);
        $gamerAnswer = prompt('Your answer');
        if ($isPrimeNumber && $gamerAnswer === $correctAnswer || !$isPrimeNumber && $gamerAnswer === $correctAnswer) {
            $countCorrectAnswer++;
            line('Correct!');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);

            break;
        }
    } while ($countCorrectAnswer < CORRECT_ANSWER);

    return $countCorrectAnswer === CORRECT_ANSWER;
}
