<?php

namespace Php\Project\Games\Prime;

use function Php\Project\Engine\runGame;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

/**
 * Function called engine of games "Brain-games"
 *
 * @return void
 */
function run(): void
{
    runGame(fn() => checkPrimeGame(), CONDITION);
}

/**
 * Function is logic of game "Brain-prime"
 *
 * @return array<string>
 */
function checkPrimeGame(): array
{
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
    $task = "Question: {$randomNumber}";

    return array($task, $correctAnswer);
}

/**
 * Check if a number is prime
 *
 * @param int $number test number
 *
 * @return bool "true" if prime else "false"
 */
function isPrime(int $number): bool
{
    $halfNumber = floor($number / 2);
    for ($i = $halfNumber; $i > 1; $i--) {
        if ($number % $i === 0 && $i > 1) {
            return false;
        }
    }
    return ($number === 1) ? false : true;
}
