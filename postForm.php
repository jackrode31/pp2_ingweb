<?php 

session_start();
if(isset($_POST['submit']))
{

$_SESSION['post-data'] = $_POST;
$_SESSION["persona"] = new Person($_POST["fname"],$_POST["lname"]);
$_SESSION["cuenta"] = new Cuenta($_POST["plata"]);
echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
}

 ?>
