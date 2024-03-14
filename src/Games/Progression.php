<?php

namespace Php\Project\Progression;

const MIN_LENGTH_PROGRESSION = 5;
const MAX_LENGTH_PROGRESSION = 10;
const MIN_START_ITEM = 0;
const MAX_START_ITEM = 100;
const MIN_STEP_PROGRESSION = 1;
const MAX_STEP_PROGRESSION = 9;
const CONDITION = 'What number is missing in the progression?';

/**
 * @return array<string>
 */
function checkProgressionGame(): array
{
    $lengthProgression = rand(MIN_LENGTH_PROGRESSION, MAX_LENGTH_PROGRESSION);
    $stepProgression = rand(MIN_STEP_PROGRESSION, MAX_STEP_PROGRESSION);
    $startItem = rand(MIN_START_ITEM, MAX_START_ITEM);
    $finishItem = $startItem + ($lengthProgression - 1) * $stepProgression;
    $progression = getProgression($startItem, $finishItem, $stepProgression);

    $indexRequireNumber = rand(0, $lengthProgression - 1);
    $correctAnswer = (string) $progression[$indexRequireNumber];
    $progression[$indexRequireNumber] = '..';
    $stringProgression = implode(' ', $progression);
    $task = "Question: $stringProgression";

    return [CONDITION, $task, $correctAnswer];
}

/**
 * Arithmetic progression as an array, where
 *
 * @param int $start  start item of the array
 * @param int $finish finish item of the array
 * @param int $step   step between the items of the array
 *
 * @return array<int>
 */
function getProgression(int $start, int $finish, int $step): array
{
    return range($start, $finish, $step);
}
