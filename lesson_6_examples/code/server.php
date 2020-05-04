<?php

if($_POST['user'] == $_POST['correct']){
   for($i=0;$i < count($_FILES['photo']['name']);$i++){
       $path = "files/".$_FILES['photo']['name'][$i];
       if(move_uploaded_file($_FILES['photo']['tmp_name'][$i],$path)){
           echo "Файл ".$_FILES['photo']['name'][$i]." успешно загружен!<br>";  
       }
   }
}
else{
    echo "Доступ запрещен!";
}
//print_r($_GET);
//print_r($_POST);
//echo $_POST['fio'];
/*
$fio = (!empty($_POST['fio'])) ? strip_tags($_POST['fio']) : "";
echo $fio;

$id = (int)$_GET['id'];
//echo $id;

//$sql = "select * from table where id = 1;delete from users";*/