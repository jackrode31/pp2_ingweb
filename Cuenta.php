<?php
require_once('Transaccion.php');
class Cuenta
{
  private $monto;
  private $nRetiros = 0;
  private $nTransferencias = 0;
  private $transacciones = array() ;
  private $cantRetiradaHoy = 0;
  public function __construct($monto)
  {
  	$this->monto = $monto;
  }
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
	  $this->transacciones[] = $transaccion;
  }

  
  

  public function depositar($cantidad)
  {
  	$this->monto += $cantidad * 1.0125;
	$this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Deposito",$cantidad));
	return true;

  
  }
  public function getTransacciones()
  {
  	return $this->transacciones;
  }
  public function retirar($cantidad)
  {
  	if($this->getNRetiros()< 4)
	{
	
		
	  if($this->getMonto()-$cantidad <100)
	  {
		
		  return array(
			  "exito"=>false,
			  "razon"=>"La Cuenta no puede quedar con menos de 100 dolares"
		  );

	  }
	  else
	  {
		  if(($this->cantRetiradaHoy + $cantidad) >1500)
		  {
		  	
			  return array(
				  "exito"=>false,
				  "razon"=>"No se puede retirar mas de 1500 dolares el mismo dia"
			  );
		  }
		  else
		  {
			  $this->setMonto($this->getMonto()-$cantidad);
			  $this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Retiro",$cantidad));
			  $this->cantRetiradaHoy = $this->cantRetiradaHoy + $cantidad;
			  $this->setNRetiros($this->getNRetiros()+1);
			  return array(
				  "exito"=>true,
				  "razon"=>""
			  );
		  }
		  
	  
	  }
	}
	else
	{
		return array(
			  "exito"=>false,
			  "razon"=>"Maximo de retiros por dia alcanzadas (4)"
		  );
	}
  }
  public function transferir($cantidad)
  {
  
  	if($this->getNTransferencias()< 3)
	{
	
		
	  if($this->getMonto()-$cantidad <100)
	  {
		  return array(
			  "exito"=>false,
			  "razon"=>"La cuenta no puede quedar con menos de 100 dolares"
		  );
	  }
	  else
	  {
		  $this->setMonto($this->getMonto()-$cantidad);
		  $this->addTransaccion(new Transaccion(count($this->getTransacciones())+1,"Transferencia",$cantidad));
		  $this->setNTransferencias($this->nTransferencias+1);
		  return array(
			  "exito"=>true,
			  "razon"=>""
		  ); 
	  
	  }
	}
	else
	{
		return array(
			  "exito"=>false,
			  "razon"=>"Maximo de transferencias por dia alcanzadas (3)"
		  );
	}
  }
  
  public function setNRetiros($num)
  {
  	$this->nRetiros = $num;
  }
  public function setNTransferencias($num)
  {
  	$this->nTransferencias = $num;
  }
   public function getNRetiros()
   {
   	return $this->nRetiros;
   } 
   public function getNTransferencias()
   {
   	return $this->nTransferencias;
   } 
public function getCantRetiradaHoy()
{

	return $this->cantRetiradaHoy;
}
}

?>
