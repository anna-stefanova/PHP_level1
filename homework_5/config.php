<?php
const PATH_BIG = "./images/big/";
const PATH_SMALL = "./images/small/";

const SERVER = "localhost";
const DB = "photogallery";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных!");

