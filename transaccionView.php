<?php
require_once('View.php');
require_once('person.php');
class TransaccionView extends View
{
	private $cuenta;
	private $persona;
	private $step;
	private $error;
	public function __construct($persona,$cuenta,$step,$error)
	{
		parent::__construct();
		
		$this->persona = $persona;
		$this->cuenta = $cuenta;
		$this->step =  $step;
		$this->error = $error;
		$content = $this->getContent();
		$content .= '<div>
			Nombre: '.$this->persona->getName().' '.$this->persona->getLastName().' |  
			Monto Capital: '.$this->cuenta->getMonto().' | 
			Cantidad de Retiros: '.$this->cuenta->getNRetiros().' | 
			Cantidad Retirada Hoy: '.$this->cuenta->getCantRetiradaHoy().' | 
			Cantidad de Transferencias: '.$this->cuenta->getNTransferencias().'
			
		</div>	
			'; 
		switch($step)
		{
			case "depositar":
				$content .='
				<div>
					<form action ="transaccion.php">
						<input type="hidden" name="action" value="depositar">
						<input type="number" name="cantidad">
						<input type="submit" value="Depositar">
					</form>
				</div>
				';
				break;
			case "retirar":
				$content .='
				<div>
					<form action ="transaccion.php">
						<input type="hidden" name="action" value="retirar">
						<input type="number" name="cantidad">
						<input type="submit" value="Retirar">
					</form>
				</div>
				';
				break;
			case "transferir":
				$content .='
				<div>
					<form action ="transaccion.php">
						<input type="hidden" name="action" value="transferir">
						<input type="number" name="cantidad">
						<input type="submit" value="Transferir">
					</form>
				</div>
				';
				break;
			default :
				$content .= '<br>
					<h3>Opciones de Transacciones</h3>
					<ul>
						<li><a href="transaccion.php?action=showDepositar">Depositar</a></li>
						<li><a href="transaccion.php?action=showRetirar">Retirar</a></li>
						<li><a href="transaccion.php?action=showTransferir">Transferir</a></li>
					</ul>

				';
				break;
		
		}
		if(!is_null($error))
		{
			$content .= '<div class="error">'.$error.'</div>';

		}
	$this->setContent($content);	
	}
	public function getCuenta(){
		return $this->cuenta;
	}

	public function setCuenta($cuenta){
		$this->cuenta = $cuenta;
	}

	public function getPersona(){
		return $this->persona;
	}

	public function setPersona($persona){
		$this->persona = $persona;
	}


}
?>
