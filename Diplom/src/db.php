<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Diplom";
$secretW = "8732505yuiindsgeio9";

$connection = mysqli_connect($servername, $username, $password, $dbName);

if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}

