<?php
require_once("View.php");
require_once("Cuenta.php");
require_once("person.php");
session_start();
if(!is_null($_SESSION["cuenta"]))
{
	$cuenta = $_SESSION["cuenta"];
}

if(!is_null($_SESSION["persona"]))
{
	$persona = $_SESSION["persona"];
}
else
{
	
echo '<script type="text/javascript"> window.open("login.php","_self");</script>';

}
$tabla ="<table><tr><th>N</th><th>Tipo</th><th>Monto</th></tr>";
foreach($cuenta->getTransacciones() as $transaccion)
{
	$tabla .= '<tr>
		<td>'.$transaccion->id.'</td>
		<td>'.$transaccion->tipo.'</td>
		<td>'.$transaccion->monto.'$</td>
		</tr>';

}
$tabla .= '</tabla>';
		$content .= '<div>
			Nombre: '.$persona->getName().' '.$persona->getLastName().' |  
			Monto Capital: '.$cuenta->getMonto().' | 
			Cantidad de Retiros: '.$cuenta->getNRetiros().' | 
			Cantidad Retirada Hoy: '.$cuenta->getCantRetiradaHoy().' | 
			Cantidad de Transferencias: '.$cuenta->getNTransferencias().'
			
		</div>	
			'; 
$pView = new View();
$pView->setContent($pView->getContent().$content.$tabla);
$pView->render();


?>
