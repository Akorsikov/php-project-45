<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;
use function Php\Project\Cli\greeting;

const NUMBER_OF_ROUNDS = 3;

/**
 * Function is engine of "Brain games"
 *
 * @param callable $game callable game function
 *
 * @return void
 */
function runGame(callable $game, string $condition): void
{
    $gamerName = greeting();
    line($condition);

    for ($i = 1; $i <= NUMBER_OF_ROUNDS; $i++) {
        [$task, $correctAnswer] = [...$game()];
        line($task);
        $gamerAnswer = prompt('Your answer');

        if ($gamerAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line(
                '\'%s\' is wrong answer ;(. Correct answer was \'%s\'.',
                $gamerAnswer,
                $correctAnswer
            );
            line("Let's try again, %s!", $gamerName);
            return;
        }
    }
    line("Congratulations, %s!", $gamerName);
}
