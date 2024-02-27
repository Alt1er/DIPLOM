<?php

require_once ('LoginConn.php');

function getErrorMessage($message)
{
    if ($_SESSION[$message]) {
        echo '<p class="message">' . $_SESSION[$message] . '</p>';
    }
    unset($_SESSION[$message]);
}


function checkUsercook(){
    require_once ("db.php");
    global $connection, $secretW;
    if(isset($_COOKIE['UserCookie'])){
        $cookie = explode('--', $_COOKIE['UserCookie']);
        $sql = "SELECT * FROM `Users` WHERE login = '$cookie[0]'";
        $result = $connection->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if(md5($row['password'] . '---' .  $secretW) == $cookie[1]){
                    $User = $row;
                }
                else{
                    setcookie("UserCookie", $value, time()-10000, '../', '', 0) ; 
                    $User=0;
                }
            }
        }
    }
return $User;
}


function menu(){
    $user=checkUsercook();
    echo  '
                <header class="header">
                        ';
                      if(!isset($user) or $user<=0){
                            echo '
                            <div class="registration">
                                <a href="login.php">Увійти</a>
                                    <span class="line"></span>
                                <a href="register.php">Зареєструватися</a>
                            </div>';
                          }else{
               
                                   if($user['id']>0){
                                        echo '<div class="registration">';
                                            if($user['status'] == 'admin'){
                                                echo '
                                                <span>  
                                                    <a  href="">Адмін</a> <span class="line"></span> 
                                                </span>
                                                ';
                                           }

                                        echo '
                                        <span>
                                            <a  href="profile.php">Профіль</a></span> <span class="line"></span>  <span> <a href = "src/exit.php" >Вийти</a>
                                        </span> </div>
                                        ';
                                    }
                                }
                                              
                            echo '
                        

                        <div class="header_last_game_info">
                            <div class="last_game_content">

                            </div>
                            
                            <div class="last_game_arrow">
                                <button class="btn"><img src="Img/free-icon-arrow-point-to-right-32213 2.png" alt=""></button>
                                <button class="btn2"><img src="Img/free-icon-arrow-point-to-right-32213.png" alt=""></button>
                            </div>
                        </div>

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
           
    ';

// return $menu;


}