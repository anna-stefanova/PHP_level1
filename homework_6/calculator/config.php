<?php

if (isset($_GET['submit'])) {

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
    if (isset($_GET['arithmetic_sign'])) {
        $operation = trim($_GET['arithmetic_sign']);
        $operation = strip_tags($operation);
        $operation = htmlspecialchars($operation);
        $operation = stripslashes($operation);

    } else {
        echo 'Введите одну из следующих арифметических операций: * , / , + , -';
    }

}
