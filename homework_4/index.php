<?php
include_once "config.php";
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

        for ($i=0; $i < count($images); $i++) : ?>
            <div class="small_img">
                <a href="big_image.php?name=<?=$images[$i] ?>" target='_blank'>
                    <img src="<?=PATH_SMALL.$images[$i] ?>">

                </a>
                <p>Имя файла - <?= $images[$i]?></p>
            </div>
            <?php
            if ($i % 5 == 5) {
                echo '<br>';
            }

            endfor;
            ?>

    </div>
    <aside>
        <h2>Загрузите свое фото</h2>
        <form action="#" enctype="multipart/form-data" method="post">
            <p>Выберите файл</p>
            <p><input type="file" name="userfile"></p>
            <p><button type="submit" name="send">Загрузить</button></p>
        </form>
    </aside>
</div>
</body>
</html>

