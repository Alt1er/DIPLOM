<?php

session_start();
require_once  ("db.php");

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatPass = $_POST['repeatpass'];

$check_email = mysqli_query($connection, "SELECT * FROM `Users` WHERE `email` = '$email'");
$check_login = mysqli_query($connection, "SELECT * FROM `Users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_login) > 0) {
    $_SESSION['loginBad'] = 'Такий користувач вже зареєстрований!';
    header('Location: ../register.php');
}if (mysqli_num_rows($check_email) > 0){
    $_SESSION['emailBad'] = 'Такий email вже використовується!';
    header('Location: ../register.php');
}
else{
    if ( empty($name) || empty($surname) || empty($login) || empty($pass) || empty($repeatPass) || empty($email) ){
        $_SESSION['fields'] = 'Заповніть всі поля';
    }else
    {
        if($pass != $repeatPass){
            $_SESSION['message'] = 'Паролі не співпадають';
            header('Location: ../register.php');
        }else
        {
            $pass = md5($pass);
            $sql = "INSERT INTO `Users` (name, surname, email, login, password) VALUES ('$name', '$surname', '$email', '$login', '$pass' )";
            if ($connection->query($sql) === TRUE) {
                $_SESSION['regGood'] = 'Реєстрація успішна!';
                header('Location: ../login.php');
            } else {
                echo "Error: " . $connection->error;
            }
        }
    }
}

