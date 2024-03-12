<?php

namespace Php\Project\Utils;

/**
 * Even or not
 *
 * @param int $number checks if the number is even or not.
 *
 * @return bool
 */
function isEven(int $number): bool
{
    return ($number % 2 === 0);
}

/**
 * Greatest common divisor (gcd)
 *
 * @param int $numberA first the number
 * @param int $numberB second the number
 *
 * @return int gcd
 */
function getGcd(int $numberA, int $numberB): int
{
    return ($numberA % $numberB) ?
        getGcd($numberB, $numberA % $numberB) : abs($numberB);
}
