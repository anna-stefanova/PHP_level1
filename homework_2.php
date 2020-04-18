<?php
# Задание №1

$a = rand(-100, 100);
$b = rand(-100, 100);
echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';
if ($a >= 0 && $b >= 0) {
    $result = $a - $b;
    echo "Вычитание: $result<br>";
}
if ($a < 0 && $b < 0) {
    $result = $a * $b;
    echo "Умножение: $result<br>";
}
if (($a >= 0 && $b <= 0) ||
    ($a <= 0 && $b >= 0)) {
    $result = $a + $b;
    echo "Сумма: $result<br>";
}

# Задание №2

$a = rand(0, 15);
function recurse($a) {
    if ($a > 15) {
        return;
    }
    echo $a . ' ';
    recurse($a + 1);
}

recurse($a);
echo '<br>';



# Задание №4

function mathOperation($arg1, $arg2, $operation) {
    $result = null;
    switch ($operation) {
        case '+':
            $result = $arg1 + $arg2;
            break;
        case '-':
            $result = $arg1 - $arg2;
            break;
        case '*':
            $result = $arg1 * $arg2;
            break;
        case '/':
            $result = $arg1 / $arg2;
            break;
        default:
            echo 'Введите одну из следующих арифметических операций: * , / , + , -';
            break;
    }
    return $result;
}

echo 'Вычитание: ' . mathOperation(2, 3, '-') . '<br>';
echo 'Сложение: ' . mathOperation(4, 6, '+') . '<br>';
echo 'Деление: ' . mathOperation(5, 6, '/') . '<br>';
echo 'Умножение: ' . mathOperation(7, 8, '*') . '<br>';

# Задание №6

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    if ($pow == 1) {
        return $val;
    }
    $val = $val * power($val, $pow - 1);
    return $val;
}
$value = 2;
$pow = 6;

echo "$value в степени $pow равно: " . power(2, 5) . "<br>";



# Задание №7

$hour = date('G');
$minute = date('i');

function formatHour($h) {
    $format = null;
    if ($h == 0 ||
        ($h >= 5 && $h <= 20)) {
        $format = 'часов';
    }
    if ($h % 10 == 1 && $h != 11) {
        $format = 'час';
    }
    if ($h % 10 >= 2 && $h % 10 <= 4 && !($h >= 12 && $h <= 14)) {
        $format = 'часа';
    }
    return $format;
}

function formatMinute($m) {
    $format = null;
    if ($m == 0 ||
        $m % 10 == 0 ||
        ($m >= 5 && $m <= 20) ||
        ($m % 10 >= 5 && $m % 10 <= 9)) {
        $format = 'минут';
    }
    if ($m % 10 >= 2 && $m % 10 <= 4 &&
        !($m >= 12 && $m <= 14)) {
        $format = 'минуты';
    }
    if ($m % 10 == 1 && $m != 11) {
        $format = 'минута';
    }
    return $format;
}

echo $hour  . ' ' . formatHour($hour) . ' ' . $minute . ' ' . formatMinute($minute) . '<br>';

