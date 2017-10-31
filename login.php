<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="cssMaestro.css">
</head>
<body>
	<h2>Bienvenido a Kojima Bank</h2>

	
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		
		<label>UserID:</label>
		<input type="text" name="iduser" required size="35"><br>

		<label>Password:</label>
		<input type="text" name="pass" required size="35"><br>

		<input class=" botón" type="submit" name="submit" value="Aceptar">
	</form>

	<h5><a href="registro.html">Registrate!!</a></h5>

<?php 

include("postForm.php");
 ses


if(isset($_POST['submit']))
 
{

	$userid = $_POST['iduser'];
	$Password = $_POST['pass'];

	if ($userid == "userfinal" && $Password == "12345") {
		
	}

 ?>

</body>
</html>