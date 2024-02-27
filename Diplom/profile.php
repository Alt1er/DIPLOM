<?php

require_once("Src/db.php"); 

 $cookie = explode('--', $_COOKIE['UserCookie']);
 $sql = "SELECT * FROM `Users` WHERE login = '$cookie[0]'";
 $result = $connection->query($sql);
 if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
         if(md5($row['password'] . '---' .  $secretW) == $cookie[1]){
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="CSS/profile.css">
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
            
                <title>Profile</title>
            </head>
            <body>
            <div class="block">
                <div class="container">
                    <header class="header">
                        <div class="header_wrapper">
                            <nav class="navigate">
                                <ul class="nav_list">
                                    <li><a href="index.php">Головна</a></li>
                                    <li><a href="#">Про нас</a> </li>
                                    <li><a href="#">Турніри</a></li>
                                    <li><a href="#">Команди</a></li>
                                    <li><a href="#">Гравці</a></li>
                                    <li><a href="#">Статистика</a></li>
                                </ul>
                            </nav>
            
                            <div class="search">
                                <input type="text"
                                       id="search"
                                       name="search"
                                       placeholder="search"
                                       value="">
                            </div>
                        </div>
                    </header>
                    <div class="line"></div>
            
                    <main class="main">
                        <div class="info">
                            <div class="photo"></div>
                            <div class="person_data">
                                <h1 class="name" style="color: white">' . $row['name'] . ' ' . $row['surname'] . '</h1>
                                <p class="status">Status: ' . ' ' . $row['status'] .'</p>
                                <p class="email">' . 'Ваша пошта:'. ' ' . $row['email'] .'</p>
                            </div>
                        </div>
                    </main>
            
                </div>
            </div>
            <script src="JS/main.js"></script>
                </body>
            </html>
            
            ';
         }
        }
    }
?>





