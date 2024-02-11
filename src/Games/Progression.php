<?php

namespace Php\Project\Progression;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const MIN_LENGTH_PROGRESSION = 5;
const MAX_LENGTH_PROGRESSION = 10;
const MIN_START_ITEM = 0;
const MAX_START_ITEM = 100;
const MIN_STEP_PROGRESSION = 1;
const MAX_STEP_PROGRESSION = 9;

function checkProgressionGame(): bool
{
    line('What number is missing in the progression?');

    $countCorrectAnswer = 0;

    do {
        $lengthProgression = rand(MIN_LENGTH_PROGRESSION, MAX_LENGTH_PROGRESSION);
        $stepProgression = rand(MIN_STEP_PROGRESSION, MAX_STEP_PROGRESSION);
        $startItem = rand(MIN_START_ITEM, MAX_START_ITEM);
        $endItem = $startItem + ($lengthProgression - 1) * $stepProgression;
        $progression = range($startItem, $endItem, $stepProgression);
        $indexRequireNumber = rand(0, $lengthProgression - 1);
        $correctAnswer = array_splice($progression, $indexRequireNumber, 1, ['..']);
        $correctAnswer = join('', $correctAnswer);
        $stringQuestion = join(' ', $progression);
        line("Question: %s", $stringQuestion);
        $gamerAnswer = prompt('Your answer');
        if ($gamerAnswer === $correctAnswer) {
            $countCorrectAnswer++;
            line('Correct!');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);

            break;
        }
    } while ($countCorrectAnswer < CORRECT_ANSWER);

    return $countCorrectAnswer === CORRECT_ANSWER;
}
