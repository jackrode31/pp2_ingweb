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


         echo '<script type="text/javascript"> window.open("main.php","_self");</script>';

        }

        else
        {
            echo "Contraseña o Usuario incorrectos.";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

    <table width="200" border="0">
  <tr>
    <td>Usuario</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td>Contraseña</td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>
