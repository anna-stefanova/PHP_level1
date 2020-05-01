<?php
print_r($_FILES);
//Array ( [file] => Array (
// [name] => 114.jpg
// [type] => image/jpeg
// [tmp_name] => C:\wamp64\tmp\php7CC1.tmp
// [error] => 0
// [size] => 11907 ) )
if (isset($_POST['submit'])) {
    $newFileName = $_POST['filename']; // новое имя файла, которое мы хотим дать в своей БД
    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
        // ввести функцию транслитерации
    }
    $imageTitle = $_POST['filetitle']; // заголовок фото
    $imageDesc = $_POST['filedesc']; // описание фото

    $file = $_FILES['file']; // в итоге получаем массив со всеми значениями файла

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode(".", $fileName); // выделение из имени файла расширения
    $fileActualExt = strtolower(end($fileExt)); // переведние выделенного расширения в нижний регистр

    $allowed = array("jpg", "jpeg", "png");
// если значение переменной $fileActualExt содержится в массиве $allowed
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." /*. uniqid("", true). "."*/ . $fileActualExt;
                $fileDestination = "images/big/" . $imageFullName; // куда грузить файл
                $imagePath = "big_image.php?name=" . $newFileName;
                $imageSize = $fileSize;

                include_once "config.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: index.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM images;";
                    $stmt = mysqli_stmt_init($connect); // инициализирует запрос и возвращает объект для его дальнейшего использования mysqli_stmt_prepare
                    if (!mysqli_stmt_prepare($stmt, $sql)) { // подготовка sql запроса к выполнению
                        echo "SQL 1 statement failed!";
                    } else {
                        mysqli_stmt_execute($stmt); // выполняет, подготовленный функцией mysqli_stmt_prepare, запрос
                        $result = mysqli_stmt_get_result($stmt); // получает результат из подготовленного запроса
                        $rowCount = mysqli_num_rows($result); // получает число рядов в результирующей выборке
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO images (name, path, size, titleGallery, descGallery) VALUES (?, ?, ?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL 2 statement failed!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssiss", $imageFullName, $imagePath, $imageSize, $imageTitle, $imageDesc); // привязка переменных к параметрам подготавливаемых запросов
                            // types: "ssss" означает, что все четыре переменные имеют тип "строка"
                            mysqli_stmt_execute($stmt);  // выполняет, подготовленный функцией mysqli_stmt_prepare, запрос

                            move_uploaded_file($fileTempName, $fileDestination); // перемещает загруженный файл в новое место

                            header("Location: index.php?upload=success");
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