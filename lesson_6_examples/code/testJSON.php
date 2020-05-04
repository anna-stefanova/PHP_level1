<?php
$mas = ["good"=>"Audi","price"=>1000];
$str = json_encode($mas);//преобразовали массив в строку JSON
//echo $str;

$arr = json_decode($str,true);//строка в массив

print_r($arr);