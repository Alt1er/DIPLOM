<?php

require_once ('LoginConn.php');

function getErrorMessage($message)
{
    if ($_SESSION[$message]) {
        echo '<p class="message">' . $_SESSION[$message] . '</p>';
    }
    unset($_SESSION[$message]);
}


