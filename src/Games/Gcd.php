<?php

namespace Php\Project\Games\Gcd;

use function Php\Project\Engine\runGame;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Find the greatest common divisor of given numbers.';

/**
 * Function called engine of games "Brain-games"
 *
 * @return void
 */
function run(): void
{
    runGame(fn() => checkGcdGame());
}

/**
 * Function is logic of game "Brain-gcd"
 *
 * @return array<string>
 */
function checkGcdGame(): array
{
    $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);

    $correctAnswer = (string) getGcd($randomNumberOne, $randomNumberTwo);
    $task = "Question: $randomNumberOne $randomNumberTwo";

    return array(CONDITION, $task, $correctAnswer);
}

/**
 * Greatest common divisor (gcd) for two numbers
 *
 * @param int $numberA first integer
 * @param int $numberB second integer
 *
 * @return int the greatest common divisor as a positive integer
 */
function getGcd(int $numberA, int $numberB): int
{
    return ((bool)($numberA % $numberB)) ?
        getGcd($numberB, $numberA % $numberB) : abs($numberB);
}
