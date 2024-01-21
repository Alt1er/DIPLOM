<?php
    session_start();
    require_once ("src/RegistrationConn.php");
    require_once ("src/helpers.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Form Login and password</title>
</head>
<body>
    <div class="wrapper">
        <form class="login" action="src/LoginConn.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Login" name = "login" required>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name = "pass" required>
                <i class='bx bx-lock-open-alt' ></i>
            </div>

            <div class="remember">
                <label for=""><input type="checkbox">Remember me</input></label>
                <a href="#">Forgot Password?</a>
            </div>
            <?= getErrorMessage('regGood')?>
            <?= getErrorMessage('errorSignIn')?>


            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don`t have an account? <a href="register.php">Register</a></p>
            </div>

        </form>
    </div>
</body>
</html>