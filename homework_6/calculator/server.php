<?php


if (isset($_GET['submit'])) {

    require "config.php";

    function sum($a, $b) { return $a + $b; }
    function divide($a, $b) {
        if ($b == 0) {
            return 'На ноль делить нельзя!';
        } else {
            return $a / $b;
        }
    }
    function subtract($a, $b) { return $a - $b; }
    function multiply($a, $b) { return $a * $b; }

    function mathOperation($arg1, $arg2, $operation)
    {
        switch ($operation) {
            case '+':
                return sum($arg1, $arg2);
                break;
            case '-':
                return subtract($arg1, $arg2);
                break;
            case '*':
                return multiply($arg1, $arg2);
                break;
            case '/':
                return divide($arg1, $arg2);
                break;
            default:
                return 'Введите одну из следующих арифметических операций: * , / , + , -';
        }
    }

    echo mathOperation($num1, $num2, $operation);
}