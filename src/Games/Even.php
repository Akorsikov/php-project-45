<?php

namespace Php\Project\Even;

use function Php\Project\Engine\runGame;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

/**
 * Function called engine of games "Brain-games"
 *
 * @return void
 */
function run(): void
{
    runGame(fn() => checkParityGame());
}

/**
 * Function is logic of game "Brain-even"
 *
 * @return array<string>
 */
function checkParityGame(): array
{
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $task = "Question: $randomNumber";
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return array(CONDITION, $task, $correctAnswer);
}

/**
 * Check if a number is even
 *
 * @param int $number checks if the number is even or not.
 *
 * @return bool "true" if even else "false"
 */
function isEven(int $number): bool
{
    return ($number % 2 === 0);
}
