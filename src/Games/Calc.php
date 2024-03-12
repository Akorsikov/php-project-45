<?php

namespace Php\Project\Calc;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 20;
const MATH_OPERATIONS = ['+', '*', '-'];
const CONDITION = 'What is the result of the expression?';

/**
 * @return array<string>
 */
function checkCalcGame(): array
{
    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);

    $indexRandomMathOperation = array_rand(MATH_OPERATIONS, 1);
    $mathOperation = MATH_OPERATIONS[$indexRandomMathOperation];


    $correctAnswer = (string) match ($mathOperation) {
        '+' => $randomNumberOne + $randomNumberTwo,
        '*' => $randomNumberOne * $randomNumberTwo,
        '-' => $randomNumberOne - $randomNumberTwo
    };

    $task = "Question: $randomNumberOne $mathOperation $randomNumberTwo";

    return array(CONDITION, $task, $correctAnswer);
}
