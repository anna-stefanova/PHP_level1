<?php
include_once 'config.php';

view_update($_GET['id'], $connect);
function view_update($id, $connect) {
    $res = null;
    $sql = "UPDATE images SET seen = seen + 1 WHERE  id = $id";
    $res = mysqli_query($connect, $sql);
    return $res;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
    <style>
        body {
            margin: 0 auto;
            max-width: 1100px;
            width: 100%;
        }
        .main {
            margin: 0 auto;
        }
        .big_img {
            max-width: 1100px;
        }
        .link {
            font-size: 20px;
            font-weight: 700;

            margin-bottom: 15px;
        }
        .link a {
            text-decoration: none;
        }

    </style>
</head>
<body>
<h1><?= $_GET['name'] ?></h1>
<div class="container">
    <div class="main">
        <div class="link">
            <a href="index.php"> Вернуться в галерею </a>
        </div>
        <div >
            <img src="<?= PATH_BIG.$_GET['name'] ?>" class="big_img">
        </div>
    </div>
</div>
</body>
</html>
