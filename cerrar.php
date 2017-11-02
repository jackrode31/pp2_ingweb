<?php
session_start();

    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        unset($_SESSION[$key]);
    }

echo '<script type="text/javascript"> window.open("login.php","_self");</script>';

?>
