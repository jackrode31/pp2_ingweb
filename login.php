<?php  session_start(); ?> 
<?php
require_once("person.php");
require_once("Cuenta.php");
/*if(isset($_SESSION['use']))  
 {
    header("Location:main.php"); 
 }

Verifica si el usuario ya se habia loggeado!! 

 */

if(isset($_POST['login']))
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
     $postUser = $_SESSION['post-data']['userid'];
     $postPass = $_SESSION['post-data']['password'];

      if($user == $postUser && $pass == $postPass)  
         {    

          $_SESSION['use']=$user;
	  $_SESSION["persona"] = new Person($_SESSION["post-data"]["fname"],$_POST["post-data"]["lname"]);
	  $_SESSION["cuenta"] = new Cuenta($_SESSION["post-data"]["plata"]);


         echo '<script type="text/javascript"> window.open("transaccion.php","_self");</script>';

        }

    
          else
        {
    
            echo '<script language="javascript">';
            echo 'alert("Contraseña incorrecta. Recuerde usar los credeciales ingresados en el registro.")';
            echo '</script>';        
        }
}


        if(isset($_POST['registro'])){

      echo '<script type="text/javascript"> window.open("index.html","_self");</script>';
        }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>

<h2>Inicia sesión en tu cuenta de Kojima Bank</h2>

<div class="center">

<form method="post">
  <div class="container">
    <label><b>Nombre de Usuario</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
      
    <input id="button" type="submit" name="login" value="Iniciar Sesión">
    <input id="button" type="submit" name="registro" value="¿No te has registrado? Hazlo aquí!" onclick = "location='index.html'"/>
</form>
</div>

</body>
<footer id="main-footer">
    <p id="footer">Presentado por: Acevedo, Roderik & Tuñón, Carlos</p>
  </footer> 
</html>
