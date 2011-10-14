<?php

include('../globalinclude.php');



class Tiger extends Carnivore
{
protected $sound;

public function __construct($name="unknown",$type="carnivore",$species="tiger",$domesticationtype="wild",$habitat="forest",$sound="roar grrrrr!")
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
