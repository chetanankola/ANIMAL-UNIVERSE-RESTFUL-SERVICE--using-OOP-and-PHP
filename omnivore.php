<?php
include('../globalinclude.php');

class Omnivore extends Animal
{
protected $habitat; //water, trees, land,
protected $domesticationtype;

public function __construct($name="unknown",$type="carnivore",$species="unknown",$domesticationtype="unknown",$habitat="unknown")
	{
		parent::__construct($name,$type,$species);
		$this->habitat = $habitat; //water, trees, land,
		$this->domesticationtype = $domesticationtype;
	} 

public function getdomesticationtype()
	{
		return $this->domesticationtype;
	}
public function setdomesticationtype($type)
	{
		$this->domesticationtype=$type;
	}

public function gethabitat()
	{
		return $this->habitat;
	}
public function sethabitat($habitat)
	{
		$this->habitat=$habitat;
	}
}

?>
