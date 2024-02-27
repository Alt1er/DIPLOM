<?php

setcookie("UserCookie", $value, time()-10000, '/', '', 0) ; 

header("Location: ../index.php");

?>