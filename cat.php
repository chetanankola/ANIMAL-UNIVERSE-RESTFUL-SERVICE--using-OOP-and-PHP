<?php

//include('../globalinclude.php');



class Cat extends Omnivore
{
protected $sound;

public function __construct($name="unknown",$type="herbivore",$species="cat",$domesticationtype="domestic",$habitat="home",$sound="meow meow")
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
