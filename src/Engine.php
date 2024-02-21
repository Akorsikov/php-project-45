<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function engine(callable $game): void
{
    line('', 'Welcome to the Brain Games!');
    $gamerName = prompt('May I have your name?');
    line('Hello, %s', $gamerName);

    $winner = call_user_func($game);

    if ($winner) {
        line("Congratulations, %s!", $gamerName);
    } else {
        line("Let's try again, %s!", $gamerName);
    }
}
