<?php
class Person {
  private $name;
  private $lastName;
  private $birthdate;
  private $address;
  private $city;
  private $province;
  private $country;
  private $creditCard;
  private $email;
  private $interests;
  private $password;
  private $userId;
  private $phone;
  


  public function withArray($persona)
  {
  	$this->setName($persona["name"]);
	$this->setlastName($persona["lastName"]);
	$this->setAddress($persona["address"]);
	$this->setCity($persona["city"]);
	$this->setProvince($peronsa["province"]);
	$this->setCountry($persona["country"]);
	$this->setCreditCard($persona["creditCard"]);
	$this->setBirthdate(DateTime::createFromFormat("Y-m-d",$persona["birthdate"]));
	$this->setEmail($persona["email"]);
	$this->setInterests($persona["interests"]);
  }

  public function withArray2($persona)
  {
  	$this->setName($persona["name"]);
	$this->setlastName($persona["lastName"]);
	$this->userId = $persona["userId"];
	$this->password =$persona ["password"]; 
  }
  public function getName() {
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function setLastName($lastName){
    $this->lastName = $lastName;
  }

  public function getBirthdate(){
    return $this->birthdate;
  }

  public function setBirthdate($birthdate){
    $this->birthdate = $birthdate;
  }

public function getAddress(){
		return $this->address;
	}

	public function setAddress($address){
		$this->address = $address;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getProvince(){
		return $this->province;
	}

	public function setProvince($province){
		$this->province = $province;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCountry($country){
		$this->country = $country;
	}

	public function getCreditCard(){
		return $this->creditCard;
	}

	public function setCreditCard($creditCard){
		$this->creditCard = $creditCard;
	}

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getInterests(){
    return $this->interests;
  }

  public function setInterests($interests){
    $this->interests = $interests;
  }

  public function getZodiacal()
  {
	  $signs = array(
		  [
			  "name"=>"Aries",
			  "minorBound"=>"21-03",
			  "upperBound"=>"19-04"
		  ],
		  [
			  "name"=>"Taurus",
			  "minorBound"=>"20-04",
			  "upperBound"=>"20-05"
		  ],
		  [
			  "name"=>"Gemini",
			  "minorBound"=>"21-05",
			  "upperBound"=>"20-06"
		  ],
		  [
			  "name"=>"Cancer",
			  "minorBound"=>"21-06",
			  "upperBound"=>"22-07"
		  ],
		  [
			  "name"=>"Leo",
			  "minorBound"=>"23-07",
			  "upperBound"=>"22-08"
		  ],
		  [
			  "name"=>"Virgo",
			  "minorBound"=>"23-08",
			  "upperBound"=>"22-09"
		  ],
		  [
			  "name"=>"Libra",
			  "minorBound"=>"23-09",
			  "upperBound"=>"22-10"
		  ],
		  [
			  "name"=>"Scorpio",
			  "minorBound"=>"23-10",
			  "upperBound"=>"21-11"
		  ],
		  [
			  "name"=>"Sagittarius",
			  "minorBound"=>"22-11",
			  "upperBound"=>"21-12"
		  ],
		  [
			  "name"=>"Goat",
			  "minorBound"=>"22-12",
			  "upperBound"=>"19-01"
		  ],
		  [
			  "name"=>"Aquarius",
			  "minorBound"=>"20-01",
			  "upperBound"=>"18-02"
		  ],
		  [
			  "name"=>"Pisces",
			  "minorBound"=>"19-02",
			  "upperBound"=>"20-03"
		  ]
	  
	  );
	  $i=0;
	  foreach($signs as $sign)
	  {
		  $lowerBound = DateTime::createFromFormat("d-m-Y",$sign["minorBound"]."-".$this->getBirthYear());
		  $upperBound = DateTime::createFromFormat("d-m-Y",$sign["upperBound"]."-".$this->getBirthYear());
		  if($this->getBirthdate()>$lowerBound && $this->getBirthdate()<=$upperBound   )
		  {
		 	break; 
		  }
	  $i = $i+1;

	  }	  
		  return $signs[$i]["name"];
  
  }
  protected function getBirthYear()
  {
  	return $this->getBirthdate()->format("Y");
  
  } 
}

 ?>
