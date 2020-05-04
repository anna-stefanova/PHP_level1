<?php

include "config.php";

$sql = "select * from goods";

$res = mysqli_query($connect,$sql);

while($data = mysqli_fetch_assoc($res)){//каждую запись из таблицы сохраняем в массиве data
    echo "Автомобиль ".$data['title']." стоит ".$data['price']."<br>";
}