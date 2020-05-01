<?php
    $_SESSION['username'] = 'Admin';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="gallery-links">
    <div class="wrapper">
        <h2>Gallery</h2>
        <div class="gallery-container">

        <?php
        include_once 'dbh.inc.php';

        $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) { // возвращает ряд результата запроса в качестве ассоциативного массива
                echo '<a href="#">
                <img src="img/gallery/' . $row['imgFullNameGallery'] . '" alt=""></a>
                <h3>' . $row['titleGallery'] . '</h3>
                <p>' . $row['descGallery'] . '</p>';
            }
        }
        ?>

        </div>
    </div>
</section>

<?php
if (isset($_SESSION['username'])) {
    echo '<div class="gallery-upload">
    <h2>Загрузите свое фото</h2>
    <form action="gallery-upl.php" enctype="multipart/form-data" method="post">
        <input type="text" name="filename" placeholder="File name...">
        <input type="text" name="filetitle" placeholder="Image title...">
        <input type="text" name="filedesc" placeholder="Image description...">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
</div>';
}

?>
</body>
</html>
