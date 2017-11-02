<?php
require_once("View.php");
require_once("Cuenta.php");
session_start();
if(!is_null($_SESSION["cuenta"]))
{
	$cuenta = $_SESSION["cuenta"];
}
else
{
	$cuenta = new Cuenta;
	$cuenta->setMonto(400);
}
if(!is_null($_SESSION["persona"]))
{
	$cuenta = $_SESSION["persona"];
}
else
{
	
echo '<script type="text/javascript"> window.open("login.php","_self");</script>';

}
$tabla ="<table><tr><th>N</th><th>Tipo</th><th>Monto</th></tr>";
foreach($cuenta->getTransacciones() as $transaccion)
{
	$tabla .= '<tr>
		<td>'.$transaccion->id.'$</td>
		<td>'.$transaccion->tipo.'$</td>
		<td>'.$transaccion->monto.'$</td>
		</tr>';

}
$tabla .= '</tabla>';
		$content .= '<div>
			Nombre: '.$this->persona->getName().' '.$this->persona->getLastName().' |  
			Monto Capital: '.$this->cuenta->getMonto().' | 
			Cantidad de Retiros: '.$this->cuenta->getNRetiros().' | 
			Cantidad Retirada Hoy: '.$this->cuenta->getCantRetiradaHoy().' | 
			Cantidad de Transferencias: '.$this->cuenta->getNTransferencias().'
			
		</div>	
			'; 
$pView = new View();
$pView->setContent($pView->getContent().$content.$tabla);
$pView->render();


?>
