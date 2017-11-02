<?php
class View{
private $header;
private $navbarContent;
private $content;
private $sidebar;
private $footer;




public function __construct()
{
	$this->header ='
<title>Kojima Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssMaestro.css">
<link rel="stylesheet" href="w3.css">
';
	$this->navbarContent = array(
		1 => array(
			"name"=>"Depositar",
			"href"=>"transaccion.php?action=showDepositar"
		),
		2 => array(
			"name"=>"Retirar",
			"href"=>"transaccion.php?action=showRetirar"
		),
		3 => array(
			"name"=>"Transferir",
			"href"=>"transaccion.php?action=showTransferir"
		),
		4 => array(
			"name"=>"Generar Informe",
			"href"=>"generarInforme.php"
		),
		5 => array(
			"name"=>"Cerrar Session",
			"href"=>"cerrar.php"
		)
	);
	$this->sidebar ='

';
	$tmpFooter = '
<footer id="main-footer">
    <p id="footer">Presentado por: Acevedo, Roderik & Tuñón, Carlos</p>
  </footer> 
';
	$this->setFooter($tmpFooter);
}
        public function getHeader(){
  	  return $this->header;
  	}

  	public function setHeader($header){
  		$this->header = $header;
  	}

  	public function getNavbarContent(){
  		return $this->navbarContent;
  	}

  	public function setNavbarContent($navbarContent){
  		$this->navbarContent = $navbarContent;
  	}

  	public function getContent(){
  		return $this->content;
  	}

  	public function setContent($content){
  		$this->content = $content;
  	}

  	public function getSidebar(){
  		return $this->sidebar;
  	}

  	public function setSidebar($sidebar){
  		$this->sidebar = $sidebar;
  	}

  	public function getFooter(){
  		return $this->footer;
  	}

  	public function setFooter($footer){
  		$this->footer = $footer;
  	}

    protected function generateNavbar()
    {
	    $navbar ='    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">  <nav>
  <h3 class="w3-bar-item">Bienvenido, '.$_SESSION['post-data']['fname']. " ".$_SESSION['post-data']['lname'].'</h3>
';
      foreach($this->getNavbarContent() as $link)
      {
	      $navbar .= ' <a href="'.$link["href"].'" class="w3-bar-item w3-button">'.$link["name"].'</a>
';
      }
	$navbar .= '
</div>
</nav>
<div style="margin-left:15%">

<div class="w3-container w3-gray">
  <h1>Kojima Bank</h1>
</div>
    ';
      return $navbar;
    }
	public function render(){
		echo '<!doctype html>
			<html>
<head>';
      echo $this->getHeader();
      echo '</head><body>
';
      echo $this->generateNavbar() ;
echo ' <div class="w3-container"> '.$this->getContent();

echo '</div>';

echo '<footer>';
	echo $this->getFooter();
	echo '</footer></body></html>';
    }
  }




 ?>
