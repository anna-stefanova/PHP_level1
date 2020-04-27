<?php

$path = "images/big/" . $_FILES['photo']['name'];

if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
    echo $_FILES['photo']['name'] . " успешно загружен на сервер!";
} else {
    echo "Ошибка загрузки файла";
}

