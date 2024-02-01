<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;
use function Php\Project\Even\checkParityGame;
use function Php\Project\Calc\checkCalcGame;

function engine(string $game): void
{
    line('', 'Welcome to the Brain Games!');
    $gamerName = prompt('May I have your name?');
    line('Hello, %s', $gamerName);

    $winner = match ($game) {
        'even' => checkParityGame(),
        'calc' => checkCalcGame(),
    };
    if ($winner) {
        line("Congratulations, %s!", $gamerName);
    } else {
        line("Let's try again, %s", $gamerName);
    }
}
