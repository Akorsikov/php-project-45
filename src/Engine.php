<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function engine(callable $game): void
{
    line('', 'Welcome to the Brain Games!');
    $gamerName = prompt('May I have your name?');
    line('Hello, %s', $gamerName);

    $roundsCounter = 1;

    do {
        [$condition, $task, $correctAnswer] = [...call_user_func($game)];
        line($condition);
        line($task);
        $gamerAnswer = prompt('Your answer');
        $isWinner = ($gamerAnswer === $correctAnswer);
        if ($isWinner) {
            line('Correct!');
            $roundsCounter++;
        } else {
            line(
                '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
                $gamerAnswer,
                $correctAnswer
            );
            break;
        }
    } while ($isWinner && $roundsCounter <= NUMBER_OF_ROUNDS);

    if ($isWinner) {
        line("Congratulations, %s!", $gamerName);
    } else {
        line("Let's try again, %s!", $gamerName);
    }
}
