<?php

//include('../globalinclude.php');


class Horse extends Herbivore
{
protected $sound;

public function __construct($name="Pony",$type="herbivore",$species="Horse",$domesticationtype="domesticandwild",$habitat="grassland",$sound="neigh neigh!!")
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
