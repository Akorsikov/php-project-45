<?php

namespace Php\Project\Even;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;

function checkParityGame(): bool
{
    line('Answer "yes" if the number is even, otherwise answer "no"');
    $countCorrectAnswer = 0;

    do {
        $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $evenNumber = ($randomNumber % 2 === 0 ) ? true : false;
        line("Question: %s", $randomNumber);
        $gamerAnswer = prompt('Your answer');

        if ($gamerAnswer === 'yes' && $evenNumber
            || $gamerAnswer === 'no' && !$evenNumber
        ) {
            $countCorrectAnswer++;
            line('Correct!');
        } else {
            if ($evenNumber) {
                $correctAnswer = ($gamerAnswer === 'yes') ? 'no' : 'yes';
            } else {
                $correctAnswer = ($gamerAnswer === 'no') ? 'yes' : 'no';
            }
            line(
                '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
                $gamerAnswer, $correctAnswer
            );
            break;
        }
    } while ($countCorrectAnswer < CORRECT_ANSWER);

    return $countCorrectAnswer === CORRECT_ANSWER;
}
