<?php
# Задание 1
$num = 100;
$count = 0;
while ($count <= $num) {
    if ($count % 3 == 0) {
        echo $count . ' ';
    } else {
        continue;
    }
    $count++;
}



