# Brain Games

## Hexlet tests and linter status

[![Actions Status](https://github.com/Akorsikov/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Akorsikov/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/a2fde1726937478c530f/maintainability)](https://codeclimate.com/github/Akorsikov/php-project-45/maintainability)

## Prerequisites

- Linux, MacOs, WSL
- PHP >= 8.0
- Make
- Git

### Setup

```bash
git clone https://github.com/Akorsikov/php-project-45.git
cd php-project-45
make install
```

[Demonstration Setup & Run](https://asciinema.org/a/TM3NrnjHQ9lAGA7GhMkAQQXG9)

## Brain Games

"Brain Games" - a set of five console games, built on the principle of popular mobile applications for brain pumping. Each game asks questions to which you have to give correct answers. After three correct answers, the game is considered to be completed. Incorrect answers end the game and offer to play it again.

---

### Brain-even (Проверка на чётность)

**(En)**  The essence of the game is the following: the user is shown a random number. And he should answer yes if the number is even or no if it is odd.

**(Ru)** Суть игры в следующем: пользователю показывается случайное число. И ему нужно ответить **yes**, если число чётное, или **no** — если нечётное.

#### Run brain-even

```bash
make brain-even
```

Демонстрация игры (asciinema)

- [lose-even](https://asciinema.org/a/g79StrDELgjeuIV1z4JLXdNHC)
- [win-even](https://asciinema.org/a/1sufFt4Cggk54eOexkaUDCYB5)

---

### Brain-calc (Калькулятор)

**(En)** The essence of the game is the following: the user is shown a random mathematical expression, for example 35 + 16, which you need to calculate and write down the correct answer.

**(Ru)** Суть игры в следующем: пользователю показывается случайное математическое выражение, например 35 + 16, которое нужно вычислить и записать правильный ответ.

#### Run brain-calc

```bash
make brain-calc
```

Демонстрация игры (asciinema)

- [lose-calc](https://asciinema.org/a/LfzCVA8bTsl99RSu2AOxia9nb)
- [win-calc](https://asciinema.org/a/pW25O9tt2JpfJytjQz52NFpSN)

---

### Brain-gcd (Hаибольший общий делитель)

**(En)** The essence of the game is as follows: the user is shown two random numbers, for example, 25 and 50. The user must calculate and enter the greatest common divisor (gcd) of these numbers.

**(Ru)** Суть игры в следующем: пользователю показывается два случайных числа, например, 25 и 50. Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.

#### Run brain-gcd

```bash
make brain-gcd
```

Демонстрация игры (asciinema)

- [lose-gcd](https://asciinema.org/a/I09SBgZcfH7Z3ZthNBYQs3Vye)
- [win-gcd](https://asciinema.org/a/avB3tTZZ9AkMq5zwbvFMHRxaE)

---

### Brain-progression (Арифметическая прогрессия)

**(En)** The essence of the game is as follows: a player is shown a series of numbers forming an arithmetic progression, with any of the numbers replaced by two dots. The player must identify this number.

**(Ru)** Суть игры в следующем: игроку показывается ряд чисел, образующий арифметическую прогрессию, с заменой любого из чисела двумя точками. Игрок должен определить это число.

#### Run brain-progression

```bash
make brain-progression
```

Демонстрация игры (asciinema)

- [lose-progression](https://asciinema.org/a/lP2QchZ0p4KfY97kWFZfll9pG)
- [win-progression](https://asciinema.org/a/st6NredxlgBvC31rvTo1478qE)

---

### Brain-prime (Простое ли число?)

The essence of the game is the following: a user is shown a random number. He should answer **yes** if the number is [prime](https://en.wikipedia.org/wiki/Prime_number), or **no** if it is not prime.

**(Ru)** Суть игры в следующем: пользователю показывается случайное число. И ему нужно ответить **yes**, если число [простое](https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D0%BE%D0%B5_%D1%87%D0%B8%D1%81%D0%BB%D0%BE), или **no** — если не простое.

#### Run brain-prime

```bash
make brain-prime
```

Демонстрация игры (asciinema)

- [lose-prime](https://asciinema.org/a/oquBhiel6AXwSmlq4JzvhTi9n)
- [win-prime](https://asciinema.org/a/WtfWDifSw5YqyUyGY7eNdCyuJ)