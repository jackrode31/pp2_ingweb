<?php
require_once("person.php");
require_once("Cuenta.php");
require_once("transaccionView.php");
$person = new Person();
$person->withArray2([
	"name" => "Carlos",
	"lastName" => "Tuñón",
	"userId" => "PepeTrump",
	"password" => "Rare"

]);
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
switch($_GET["action"])
{
	case "showDepositar":
	$pTransaccionView = new TransaccionView($person,$cuenta,"depositar",null);
	break;
	case "showTransferir":
	$pTransaccionView = new TransaccionView($person,$cuenta,"transferir",null);
	break;
	case "showRetirar":
	$pTransaccionView = new TransaccionView($person,$cuenta,"retirar",null);
	break;
	case "depositar":
		$response=$cuenta->depositar($_GET["cantidad"]);	
		if(!$response["exito"])
		{			
			$pTransaccionView = new TransaccionView($person,$cuenta,"showDepositar",$response["razon"]);
		}
		else
		{
		
			$pTransaccionView = new TransaccionView($person,$cuenta,"depositar",null);
		}
	break;
	case "retirar":
		$response=$cuenta->retirar($_GET["cantidad"]);
		if(!$response["exito"])
		{			
			$pTransaccionView = new TransaccionView($person,$cuenta,"showRetirar",$response["razon"]);
		}
		else
		{
		
			$pTransaccionView = new TransaccionView($person,$cuenta,"retirar",null);
		}
	break;
	case "transferir":
		$response=$cuenta->transferir($_GET["cantidad"]);
		if(!$response["exito"])
		{			
			$pTransaccionView = new TransaccionView($person,$cuenta,"showTransferir",$response["razon"]);
		}
		else
		{
			$pTransaccionView = new TransaccionView($person,$cuenta,"transferir",null);
		}
	break;
}
$_SESSION["cuenta"] = $cuenta;
$pTransaccionView->render();
?>
