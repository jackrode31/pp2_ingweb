<?php
class Transaccion
{
  public $id;
  public $monto;
  public $tipo;
  
  public function __construct($id,$tipo,$monto)
  {
    $this->id = $id;
    $this->tipo = $tipo;
    $this->monto = $monto;
  
  }

}

?>
