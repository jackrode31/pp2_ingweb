<?php 
if(isset($_POST['submit']))
 
{
session_start();

$_SESSION['post-data'] = $_POST;

echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
}

 ?>
