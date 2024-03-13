<?php

namespace Php\Project\Utils;

/**
 * Check if a number is even
 *
 * @param int $number checks if the number is even or not.
 *
 * @return bool "true" if even else "false"
 */
function isEven(int $number): bool
{
    return ($number % 2 === 0);
}

/**
 * Greatest common divisor (gcd) for two numbers
 *
 * @param int $numberA first integer
 * @param int $numberB second integer
 *
 * @return int the greatest common divisor as a positive integer
 */
function getGcd(int $numberA, int $numberB): int
{
    return ($numberA % $numberB) ?
        getGcd($numberB, $numberA % $numberB) : abs($numberB);
}

/**
 * Check if a number is prime
 * 
 * @param int $number test number
 * 
 * @return bool "true" if prime else "false"
 */
function isPrime(int $number): bool
{
    $halfNumber = floor($number / 2);
    for ($i = $halfNumber; $i > 1; $i--) {
        if ($number % $i === 0 && $i > 1) {
            return false;
        }
    }
    return true;
}