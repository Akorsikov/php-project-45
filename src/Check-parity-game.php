<?php

/**
* Игра "Проверка на чётность".
*
* Суть игры в следующем: пользователю показывается случайное число.
* И ему нужно ответить yes, если число чётное, или no — если нечётное:
*
* Пример:
* Welcome to the Brain Games!
* May I have your name? Bill
* Hello, Bill!
* Answer "yes" if the number is even, otherwise answer "no".
* Question: 15
* Your answer: yes
*
* В случае, если пользователь даст неверный ответ, необходимо завершить игру и вывести сообщение:
*
* 'yes' is wrong answer ;(. Correct answer was 'no'.
* Let's try again, Bill!
*
* В случае, если пользователь ввёл верный ответ, нужно отобразить:
*
* Correct!
*
* и приступить к следующему числу.
*
* Пользователь должен дать правильный ответ на три вопроса подряд. После успешной игры нужно вывести:
*
* Congratulations, Bill!
*/

namespace Php\Project\Check\Parity\Game;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;
const START_RANDOM_NUMBER = 0;
const FINISH_RANDOM_NUMBER = 100;


line('Welcome to the Brain Games!');
$gamerName = prompt('May I have your name?');
line('Hello, %s', $gamerName);
line('Answer "yes" if the number is even, otherwise answer "no"');

$countCorrectAnswer = 0;

for (; $countCorrectAnswer < CORRECT_ANSWER;) {
    $randomNumber = rand(START_RANDOM_NUMBER, FINISH_RANDOM_NUMBER);
    $evenNumber = ($randomNumber % 2 === 0 ) ? true : false;
    line("Question: %s", $randomNumber);
    $gamerAnswer = prompt('Your answer');
    if ($gamerAnswer === 'yes' && $evenNumber || $gamerAnswer === 'no' && !$evenNumber) {
        $correctAnswer++;
        line('Correct!');
    } else {
        if ($evenNumber) {
            $correctAnswer = ($gamerAnswer === 'yes') ? 'no' : 'yes';
        } else {
            $correctAnswer = ($gamerAnswer === 'no') ? 'yes' : 'no';
        }
        line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $gamerAnswer, $correctAnswer);
        line("Let's try again, %s", $gamerName);
        break;
    }
}

if ($countCorrectAnswer === CORRECT_ANSWER) {
    line("Congratulations, %s!", $gamerName);
}
