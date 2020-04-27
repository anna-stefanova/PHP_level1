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
<?php
$dir_path_small = "images/small/";

$extensions_array = ['jpg', 'png', 'jpeg', 'gif', 'ico', 'tiff'];
if (is_dir($dir_path_small)) {
    $files_small = scandir($dir_path_small);
}
$dir_path_big = "images/big/";

if (is_dir($dir_path_big)) {
    $files_big = scandir($dir_path_big);
}

?>
<div class="container">
    <div class="main">

        <?php
        //print_r($file); массив картинок
        for ($i = 0; $i < count($files_small); $i++) :
            if ($files_small[$i] != '.' && $files_small[$i] != '..') {
                 ?>
                <div class="small_img">
                    <a href="big_photo.php?name=<?= $files_small[$i];?>" target='_blank'>
                        <img src='<?php echo $dir_path_small . $files_small[$i]?>' style=''>
                    </a>
                    <p>Имя файла - <?= $files_small[$i]?></p>

                </div>
                    <?php
                    if ($i % 5 == 1) {
                        echo '<br>';
                    }
            }

            endfor;
            ?>

    </div>
    <aside>
        <h2>Загрузите свое фото</h2>
        <form action="server1.php" enctype="multipart/form-data" method="post">
            <p>Выберите файл</p>
            <p><input type="file" name="photo" accept="ima"></p>
            <p><input type="submit" value="Сохранить"></p>
        </form>
    </aside>
</div>
</body>
</html>

