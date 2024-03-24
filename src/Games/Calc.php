<?php

namespace Php\Project\Games\Calc;

use function Php\Project\Engine\runGame;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 20;
const MATH_OPERATIONS = ['+', '*', '-'];
const CONDITION = 'What is the result of the expression?';

/**
 * Function called engine of games "Brain-games"
 *
 * @return void
 */
function run(): void
{
    runGame(fn() => checkCalcGame(), CONDITION);
}

/**
 * Function is logic of game "Brain-calc"
 *
 * @return array<string>
 */
function checkCalcGame(): array
{
    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);

    $indexRandomMathOperation = array_rand(MATH_OPERATIONS, 1);
    $mathOperation = MATH_OPERATIONS[$indexRandomMathOperation];

    $correctAnswer = (string) getMathOperation(
        $mathOperation,
        $randomNumberOne,
        $randomNumberTwo
    );

    $task = "Question: {$randomNumberOne} {$mathOperation} {$randomNumberTwo}";

    return [$task, $correctAnswer];
}

/**
 * Execute math operation whith two numbers
 *
 * @param string $operation     math operation as sring, example '+', '*' or '-'
 * @param int    $firstOperand  first operand math operation
 * @param int    $secondOperand second operand math operation
 *
 * @return int result of math operation as integer number
 */
function getMathOperation(
    string $operation,
    int $firstOperand,
    int $secondOperand
): int {
    return match ($operation) {
        '+' => $firstOperand + $secondOperand,
        '*' => $firstOperand * $secondOperand,
        '-' => $firstOperand - $secondOperand,
        default => exit('ERROR: operation cannot be executed')
    };
}
