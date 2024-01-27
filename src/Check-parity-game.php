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

// Поприветствовать и спросить имя игрока;
line('Welcome to the Brain Games!');
$gamerName = prompt('May I have your name?');
// Поздороваться с игроком по имени и предложить ответить на вопрос;
line('Hello, %s', $gamerName);
line('Answer "yes" if the number is even, otherwise answer "no"');
// Сгенерировать случайное число например от 0 до 100;
// Создать логику проверки на три правильных ответа или завершить игру при неправильном ответе;
