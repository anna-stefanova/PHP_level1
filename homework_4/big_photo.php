<?php
$dir_path_big = "images/big/";

if (is_dir($dir_path_big)) {
    $files_big = scandir($dir_path_big);
}


for ($i = 0; $i < count($files_big); $i++) {
    if($files_big[$i] != '.' && $files_big[$i] != '..') {
        $path = $dir_path_big . $files_big[$i];
        echo "<img src='$dir_path_big$files_big[$i]' style=''>";
        break;
    }
}
