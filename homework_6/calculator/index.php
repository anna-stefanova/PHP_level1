<?php
require "config.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="get" action="#">
    <fieldset><legend>Калькулятор</legend>

        <span><input type="text" name="num_one" value="<?php isset($num1) ? print $num1 : '';?>" placeholder="Введите число 1"></span>
        <select name="arithmetic_sign">
            <option value="+" <?php @$operation == "+" ? print "selected" : false;?>> + </option>
            <option value="-" <?php @$operation == "-" ? print "selected" : false;?>> - </option>
            <option value="*" <?php @$operation == "*" ? print "selected" : false;?>> * </option>
            <option value="/" <?php @$operation == "/" ? print "selected" : false;?>> / </option>
        </select>
        <span><input type="text" name="num_two" value="<?php isset($num2) ? print $num2 : '';?>" placeholder="Введите число 2"></span>
        <input type="submit" name="submit" value="=">

        <?php
        require "server.php";
        ?>
    </fieldset>
</form>
</body>
</html>
