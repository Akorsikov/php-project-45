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

    for ($roundsCounter = 1; $roundsCounter <= NUMBER_OF_ROUNDS; $roundsCounter++) {
        [$condition, $task, $correctAnswer] = [...$game()];
        if ($roundsCounter === 1) {
            line($condition);
        }
        line($task);
        $gamerAnswer = prompt('Your answer');
        $isWinner = ($gamerAnswer === $correctAnswer);

        if ($isWinner) {
            line('Correct!');
        } else {
            line(
                '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
                $gamerAnswer,
                $correctAnswer
            );
            $roundsCounter = NUMBER_OF_ROUNDS + 1;
        }
    }

    if ($isWinner) {
        line("Congratulations, %s!", $gamerName);
    } else {
        line("Let's try again, %s!", $gamerName);
    }
}
