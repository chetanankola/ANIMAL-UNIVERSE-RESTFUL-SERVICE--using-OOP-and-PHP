<?php

//include('../globalinclude.php');



class Cow extends Herbivore
{
protected $sound;

public function __construct($name="vanaspati",$type="herbivore",$species="Cow",$domesticationtype="domestic",$habitat="Home",$sound="Mooo Mooo!!")
	{
		parent::__construct($name,$type,$species,$domesticationtype,$habitat);
		$this->sound = $sound; //sound it makes
	}
public function getsound()
	{
		return $this->sound;
	}
public function setsound($sound)
	{
		$this->sound=$sound;
	}
public function talk()
	{
		return $this->sound;
	}


}





?>
