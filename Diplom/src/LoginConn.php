<?php
session_start();
require_once ("db.php");
require_once ("helpers.php");
$login = $_POST['login'];
$pass = md5($_POST['pass']);
global $secretW;

if(empty($login) || empty($pass)){
    
}else{

    
    $sql = "SELECT * FROM `Users` WHERE login = '$login' AND  password = '$pass'";
    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $value = $row['login'] . '--' . md5($row['password'] . '---' .  $secretW ); /* */

            setcookie("UserCookie", $value, time()+3600, '/', '', 0) ;  /* срок действия 1 час */

            header('Location: ../index.php');
        }
    }else{
        $_SESSION['errorSignIn'] = 'Не правильно введені дані!';
        header('Location: ../login.php');
    }

}
