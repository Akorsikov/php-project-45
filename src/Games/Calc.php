<?php

namespace Php\Project\Calc;

use function cli\line;
use function cli\prompt;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 20;
const MATH_OPERATIONS = ['+', '*', '-'];

function checkCalcGame(): bool
{
    line('What is the result of the expression?');

    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomMathOperation = rand(0, count(MATH_OPERATIONS) - 1);
    $mathOperation = MATH_OPERATIONS[$randomMathOperation];

    $correctAnswer = match ($mathOperation) {
        '+' => $randomNumberOne + $randomNumberTwo,
        '*' => $randomNumberOne * $randomNumberTwo,
        '-' => $randomNumberOne - $randomNumberTwo
    };

    $mathTask = "{$randomNumberOne} {$mathOperation} {$randomNumberTwo}";
    line("Question: %s", $mathTask);
    $gamerAnswer =(string) prompt('Your answer');

    if ($gamerAnswer === $correctAnswer) {
        line('Correct!');

        return true;
    } else {
        line(
            '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
            $gamerAnswer,
            $correctAnswer
        );

        return false;
    }
}
