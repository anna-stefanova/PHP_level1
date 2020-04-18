<?php
# Задание №4
# Реализовать функцию с тремя параметрами. В зависимости от
# переданного значения операции выполнить одну из арифметических операций

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
# С помощью рекурсии организовать функцию возведения числа в степень

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
# Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями

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

