<?php

namespace Php\Project\Even;

use function cli\line;
use function cli\prompt;

const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;

function checkParityGame(): bool
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $evenNumber = ($randomNumber % 2 === 0);
    line("Question: %s", $randomNumber);
    $gamerAnswer = prompt('Your answer');

    if (
        $gamerAnswer === 'yes' && $evenNumber
        || $gamerAnswer === 'no' && !$evenNumber
    ) {
        line('Correct!');

        return true;
    } else {
        if ($evenNumber) {
            $correctAnswer = ($gamerAnswer === 'yes') ? 'no' : 'yes';
        } else {
            $correctAnswer = ($gamerAnswer === 'no') ? 'yes' : 'no';
        }
        line(
            '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
            $gamerAnswer,
            $correctAnswer
        );
        return false;
    }
}
