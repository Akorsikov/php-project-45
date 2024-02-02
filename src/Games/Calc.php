<?php

namespace Php\Project\Calc;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 20;
const MATH_OPERATIONS = [' + ', ' * ', ' - '];

function checkCalcGame(): bool
{
    line('What is the result of the expression?');

    $countCorrectAnswer = 0;

    do {
        $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $randomMathOperation = rand(0, count(MATH_OPERATIONS) - 1);
        $mathOperation = MATH_OPERATIONS[$randomMathOperation];

        $correctAnswer = match ($mathOperation) {
            ' + ' => $correctAnswer = $randomNumberOne + $randomNumberTwo,
            ' * ' => $correctAnswer = $randomNumberOne * $randomNumberTwo,
            ' - ' => $correctAnswer = $randomNumberOne - $randomNumberTwo
        };

        $mathTask = "{$randomNumberOne}{$mathOperation}{$randomNumberTwo}";
        line("Question: %s", $mathTask);
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
