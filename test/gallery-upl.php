<?php

if (isset($_POST['submit'])) {
    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName); // выделение из имени файла расширения
    $fileActualExt = strtolower(end($fileExt)); // переведние выделенного расширения в нижний регистр

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." /*. uniqid("", true). "."*/ . $fileActualExt;
                $fileDestination = "img/gallery/" . $imageFullName;

                include_once "dbh.inc.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: gallery.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM gallery;";
                    $stmt = mysqli_stmt_init($conn); // инициализирует запрос и возвращает объект для его дальнейшего использования mysqli_stmt_prepare
                    if (!mysqli_stmt_prepare($stmt, $sql)) { // подготовка sql запроса к выполнению
                        echo "SQL statement failed!";
                    } else {
                        mysqli_stmt_execute($stmt); // выполняет, подготовленный функцией mysqli_stmt_prepare, запрос
                        $result = mysqli_stmt_get_result($stmt); // получает результат из подготовленного запроса
                        $rowCount = mysqli_num_rows($result); // получает число рядов в результирующей выборке
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder); // привязка переменных к параметрам подготавливаемых запросов
                            // types: "ssss" означает, что все четыре переменные имеют тип "строка"
                            mysqli_stmt_execute($stmt);  // выполняет, подготовленный функцией mysqli_stmt_prepare, запрос

                            move_uploaded_file($fileTempName, $fileDestination); // перемещает загруженный файл в новое место

                            header("Location: gallery.php?upload=success");
                        }
                    }
                }
            } else {
                echo "File size is too big!";
            }
        } else {
            echo "You had an error!";
            exit();
        }
    } else {
        echo "You need to upload a proper file type!";
        exit();
    }
}