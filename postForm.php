<?php 
if(isset($_POST['submit']))
 
{
 
$name = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country  = $_POST['country'];
$address = $_POST['address'];
$state = $_POST['state'];
$pais = $_POST['valor'];
$codex = $_POST['nserie'];


echo "<h1>Gracias por registrarse en Kojima Bank, $fname $lname</h1>";


/*echo "<h1>Software Activado</h1>";

echo "<hr>";
 
echo "<h3 style ='color:green; '>Datos personales</h3><br>";

echo "<p style='margin:4px; padding:5px;'>Su nombre completo:<b> $name </b> <b>$lname</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Email: <b>$email</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Dirección: <b>$country, $address, $state</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Teléfono: <b>$phone</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>RUT: <b>$dntknow</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>País: <b>$pais</b><br></p>";

echo "<p style='margin:4px; padding:5px;'>Su código de activación: <b>$codex</b><br></p>";

echo "<h6 style='color:green; font-style:italic;'>Gracias por activar su producto.</h6><br>";
}*/

 ?>
