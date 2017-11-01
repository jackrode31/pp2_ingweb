<?php
include('Transaccion.php');
class Cuenta
{
  private $monto;
  private $nRetiros;
  private $nTransferencias;
  private $transacciones = array();
  public function getMonto()
  {
	return $this->monto;
  }

  public function setMonto($cantidad)
  {
  	$this->monto = $cantidad;
  
  }
  public function addTransaccion($transaccion)
  {
 	$this->transacciones = array_push($this->transacciones,$transaccion); 
  }

  public function decrementar($cantidad)
  {
  
  
  }

  public function depositar($cantidad)
  {
  	$this->monto += $cantidad * 1.0125;
	$this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Deposito",$cantidad));
	return true;

  
  }
  public function retirar($cantidad)
  {
  	if($this->getNRetiros()< 4)
	{
	
		
	  if($this->getMonto()-$cantidad <100)
	  {
		return false;
	  }
	  else
	  {
		  $this->setMonto($this->getMonto()-$cantidad);
		  $this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Retiro",$cantidad));
		  $this->setNRetiros($this->getNRetiros()+1);
		  return true;
	  
	  }
	}
	else
	{
		return false;
	}
  }

  public function transferencia
  {
  
  	if($this->getNTransferencias()< 3)
	{
	
		
	  if($this->getMonto()-$cantidad <100)
	  {
		return false;
	  }
	  else
	  {
		  $this->setMonto($this->getMonto()-$cantidad);
		  $this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Transferencia",$cantidad));
		  $this->setNTransferencias($this->getNTransferencias()+1);
		  return true;
	  
	  }
	}
	else
	{
		return false;
	}
  
  
  }

}

?>
