<?php

if (isset($_GET['sum']) || isset($_GET['subtract']) ||
    isset($_GET['multiply']) || isset($_GET['divide'])) {

    if (isset($_GET['num_one']) ) {
        $num1 = trim($_GET['num_one']);
        $num1 = (int) $num1;
    } else {
        echo "Введите первое значение. Значение должно быть числом.";
    }
    if (isset($_GET['num_two'])) {
        $num2 = trim($_GET['num_two']);
        $num2 = (int) $num2;
    } else {
        echo "Введите второе значение. Значение должно быть числом.";
    }

    if (isset($_GET['sum'])) {
        $operator = trim($_GET['sum']);
        $operator = strip_tags($operator);
        $operator = htmlspecialchars($operator);
        $operator = stripslashes($operator);
    } elseif (isset($_GET['subtract'])) {
        $operator = trim($_GET['subtract']);
        $operator = strip_tags($operator);
        $operator = htmlspecialchars($operator);
        $operator = stripslashes($operator);
    } elseif (isset($_GET['multiply'])) {
        $operator = trim($_GET['multiply']);
        $operator = strip_tags($operator);
        $operator = htmlspecialchars($operator);
        $operator = stripslashes($operator);
    } elseif (isset($_GET['divide'])) {
        $operator = trim($_GET['divide']);
        $operator = strip_tags($operator);
        $operator = htmlspecialchars($operator);
        $operator = stripslashes($operator);
    } else {
        echo 'Введите одну из следующих арифметических операций: * , / , + , -';
    }

}
