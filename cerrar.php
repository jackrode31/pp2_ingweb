<?php
session_start();

    $helper = array_keys($_SESSION);
    foreach ($helper as $key){
        unset($_SESSION[$key]);
    }

echo '<script type="text/javascript"> window.open("index.html","_self");</script>';

?>
