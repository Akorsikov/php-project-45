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
        $winner = call_user_func($game);
        $roundsCounter++;
    } while ($winner && $roundsCounter <= NUMBER_OF_ROUNDS);

    if ($winner) {
        line("Congratulations, %s!", $gamerName);
    } else {
        line("Let's try again, %s!", $gamerName);
    }
}
