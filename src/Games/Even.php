<?php

namespace Php\Project\Even;

use function Php\Project\Utils\isEven;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;
const CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

/**
 * @return array<string>
 */
function checkParityGame(): array
{
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    // $isEvenNumber = ($randomNumber % 2 === 0);
    $task = "Question: $randomNumber";
    $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';

    return array(CONDITION, $task, $correctAnswer);
}
