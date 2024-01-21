<?php
    session_start();
    require_once ("src/helpers.php")
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/reg.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Form Login and password</title>
</head>
<body>
<div class="wrapper">
    <form class="registration" action="src/RegistrationConn.php" method="post">
        <h1>Registration</h1>
        <div class="input-box">
            <input type="text" placeholder="Name" name = "name" >
            <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Surname" name = "surname" >
            <i class='bx bx-user'></i>
        </div>
        <div class="input-box">
            <input type="text" placeholder="Email" name = "email" >
            <i class='bx bx-envelope'></i>
        </div>

        <div class="input-box">
            <input type="text" placeholder="Login" name = "login" >
            <i class='bx bx-comment-dots'></i>
        </div>

        <div class="input-box">
            <input type="password" placeholder="Password" name = "pass" >
            <i class='bx bx-lock-open-alt' ></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Repeat Password" name = "repeatpass">
            <i class='bx bx-lock-open-alt' ></i>
        </div>

        <?= getErrorMessage('message')?>
        <?= getErrorMessage('fields')?>
        <?= getErrorMessage('loginBad')?>
        <?= getErrorMessage('emailBad')?>

        <div class="box">
            <a href="index.html">Повернутись на головну</a>
        </div>


        <button type="submit" class="btn">Registration</button>


    </form>
</div>
</body>
</html>