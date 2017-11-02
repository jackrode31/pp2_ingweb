<?php
session_start();

echo $_SESSION['post-data']['plata'];

echo "<form method='post'>
<label>Cantidad a depositar</label>
<input type='text' name='deposito' required>
<input type='submit' value='dale, dale don dale'>
</form>";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
$deposito = $_POST['deposito'];
$_SESSION['deposito']=$deposito;


$_SESSION['post-data']['plata']= $_SESSION['post-data']['plata'] + $_SESSION['deposito'];

echo "nuevo capital:" .$_SESSION['post-data']['plata'];

echo "<a href='main.php'>menu</a>";

}

?>

