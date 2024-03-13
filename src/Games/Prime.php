<?php

namespace Php\Project\Prime;

use function Php\Project\Utils\isPrime;

const START_RANDOM_NUMBER = 1;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

/**
 * @return array<string>
 */
function checkPrimeGame(): array
{
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
    $task = "Question: $randomNumber";

    return array(CONDITION, $task, $correctAnswer);
}
