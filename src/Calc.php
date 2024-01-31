<?php

/**
 * Игра "Калькулятор".
 * Суть игры в следующем: пользователю показывается случайное математическое выражение, например 35 + 16,
 * которое нужно вычислить и записать правильный ответ.
 * Вывод должен получиться следующий:
 *
 * ./bin/brain-calc
 * Welcome to the Brain Games!
 * May I have your name? Sam
 * Hello, Sam!
 * What is the result of the expression?
 * Question: 4 + 10
 * Your answer: 14
 * Correct!
 * Question: 25 - 11
 * Your answer: 14
 * Correct!
 * Question: 25 * 7
 * Your answer: 175
 * Correct!
 * Congratulations, Sam!
 *
 * Достаточно реализовать следующие операции: +, - и *.
 * Операции, как и числа, выбираются случайным образом.
 * В случае, если пользователь даст неверный ответ, необходимо вывести:
 *
 * Question: 25 * 7
 * Your answer: 145
 * '145' is wrong answer ;(. Correct answer was '175'.
 * Let's try again, Sam!
 *
 * и завершить игру.
 */

namespace Php\Project\Calc;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 30;
const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 20;
const MATH_OPERATIONS = ['addition', 'multiplication', 'subtruction'];

function CheckCalcGame(): void
{
    line('Welcome to the Brain Games!');
    $gamerName = prompt('May I have your name?');
    line('Hello, %s', $gamerName);
    line('What is the result of the expression?');

    $countCorrectAnswer = 0;
    $mathOperation = 'X';

    for (; $countCorrectAnswer < CORRECT_ANSWER;) {
        $randomNumberOne = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $randomNumberTwo = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
        $randomMathOperation = rand(0, count(MATH_OPERATIONS) - 1);

        switch (MATH_OPERATIONS[$randomMathOperation]) {
            case 'addition':
                $correctAnswer = $randomNumberOne + $randomNumberTwo;
                $mathOperation = ' + ';
                break;
            case 'multiplication':
                $correctAnswer = $randomNumberOne * $randomNumberTwo;
                $mathOperation = ' * ';
                break;
            case 'subtruction':
                $correctAnswer = $randomNumberOne - $randomNumberTwo;
                $mathOperation = ' - ';
                break;
        }

        $mathTask = "{$randomNumberOne}{$mathOperation}{$randomNumberTwo}";
        line("Question: %s", $mathTask);
        $gamerAnswer = prompt('Your answer');
        if ((int) $gamerAnswer === $correctAnswer) {
            $countCorrectAnswer++;
            line('Correct!');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);
            line("Let's try again, %s", $gamerName);
            break;
        }
    }
    if ($countCorrectAnswer === CORRECT_ANSWER) {
        line("Congratulations, %s!", $gamerName);
    }
}
