<!DOCTYPE html>
<html>
<title>Kojima Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">Bienvenido, <?php session_start(); echo $_SESSION['post-data']['fname']; echo " ".$_SESSION['post-data']['lname']; ?></h3>
  <a href="#" class="w3-bar-item w3-button">Transacciones</a>
  <a href="#" class="w3-bar-item w3-button">Generar Informe</a>
  <a href="logout.php" class="w3-bar-item w3-button">Cerrar Sessión</a>
</div>


<div style="margin-left:15%">

<div class="w3-container w3-gray">
  <h1>Kojima Bank</h1>
</div>

<div class="w3-container">

<?php session_start();

echo "Numero de cuenta: " .$_SESSION['post-data']['ncuenta'];
echo "<br>Capital: " .$_SESSION['post-data']['plata'];



?>

</div>

</div>
      
</body>
</html>