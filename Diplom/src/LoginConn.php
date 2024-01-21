<?php
session_start();
require_once ("db.php");
require_once ("helpers.php");

$login = $_POST['login'];
$pass = md5($_POST['pass']);

if(empty($login) || empty($pass)){
}else{
    $sql = "SELECT * FROM `Users` WHERE login = '$login' AND  password = '$pass'";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "Welcome " . $row['login'];
        }
    }else{
        $_SESSION['errorSignIn'] = 'Не правильно введені дані!';
        header('Location: ../login.php');
    }

}
