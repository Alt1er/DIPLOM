<?php

require_once ("src/db.php");
require_once("src/helpers.php");
global $secretW;
echo '


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

    <title>Diplom</title>
</head>
<body>
<div class="block">
        <div class="container">';



         $menu = menu();
         
        echo '
            </div>
            
                <main class="main">
                 <div class="container">

                 <div class="slider">
                        <img class="news_img" src="img/image.webp">
                        <div class="caption">Хтось шось виграв</div>
                    </div>


                   <div class="main_header">
                        <h2>Recent Tournaments</h2>
                        
                        <ul class="main_nav">
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        <li><p class="link">Name</p></li>
                        </ul>
                    </div>
                   
                   <div class="main_table">
                   
                     <div class="QuarterFinals">

                      <p>1/4</p>
                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                     </div>

                     <div class="SemiFinals">
                      
                      <p>1/2</p>
                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                     </div>

                     <div class="Finals">
                      
                      <p>Finals</p>
                      <div class="wrapper_field">
                       <div class="field"></div>
                       <div class="field"></div>
                      </div>

                     </div>

                     <div class="Winner">
                      
                      <p>Winner</p>
                      <div class="wrapper_field">
                       <div class="field"></div>
                      </div>

                     </div>

                   </div>
                 </div>
                </main>


                <footer class="footer">
                  <p>Зв\'язок з нами</p>
                  <a href="" class="footer_link"><img src="Img/inst.png" alt=""></a>
                  <a href="" class="footer_link"><img src="Img/facebook.png" alt=""></a>
                  <a href="" class="footer_link"><img src="Img/TG.png" alt=""></a>
                </footer>





            </div>
        </div>
    </div>   
        <script src="JS/main.js"></script>
</body>
</html>';

?>