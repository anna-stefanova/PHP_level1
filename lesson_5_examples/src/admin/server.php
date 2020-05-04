<?php
include "../config.php";

$id = $_GET['id'];
$price = $_GET['price'];

//print_r($_GET);
$sql = "update goods set price = $price where id = $id";
//echo $sql;

if(mysqli_query($connect,$sql)){
    echo "Success!!!";
}
else{
    echo "Error";
}