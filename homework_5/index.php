<?php
require "config.php";
include_once "photo.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Gallery</title>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <style>
        body {
            margin: 0 auto;
            max-width: 1100px;
            width: 100%;
        }
        .main {
            margin: 0 auto;
        }

        .small_img {
            display: inline-block;
            width: 210px;
        }
    </style>
</head>
<body>
<h1>Фотографии</h1>
<div class="container">
    <div class="main">

        <?php


        $sql = "select * from images ORDER BY seen DESC";
        $res = mysqli_query($connect, $sql);

        while ($data = mysqli_fetch_assoc($res)) :?>
            <div class="small_img">
                <a href="<?=$data['path']?>&id=<?= $data['id']?>" target='_blank'>
                    <img src="<?= PATH_SMALL . $data['name']?>">
                </a>
                <p>Имя файла - <?= $data['name'] ?></p>
                <p>Размер файла: <?= $data['size'] ?> Кбайт</p>
                <p>Просмотры: <?= $data['seen'] ?></p>
            </div>
            <?php
            if ($data['id'] % 5 == 5) {
                echo '<br>';
            }
        endwhile;?>

    </div>
    <aside class="gallery-upload">
        <h2>Загрузите свое фото</h2>
        <form action="gallery_upload.php" enctype="multipart/form-data" method="post">
            <p><input type="text" name="filename" placeholder="Имя файла..."></p>
            <p><input type="text" name="filetitle" placeholder="Заголовок фото..."></p>
            <p><input type="text" name="filedesc" placeholder="Описание фото..."></p>
            <p><input type="file" name="file"></p>
            <p><button type="submit" name="submit">ЗАГРУЗИТЬ</button></p>
        </form>
    </aside>
</div>
</body>
</html>

