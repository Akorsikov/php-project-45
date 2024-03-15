<?php

namespace Php\Project\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Function invites to the game, asks for a name and greets the player.
 *
 * @return string greeting for gamer.
 */
function greeting(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
