<?php

//include('../globalinclude.php');



class Dog extends Omnivore
{
protected $sound;

public function __construct($name="unknown",$type="herbivore",$species="dog",$domesticationtype="domestic",$habitat="home",$sound="bow wow")
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







/*class Dog extends Animal
{

 public function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            	call_user_func_array(array($this,$f),$a); 
        } 
	else	//default values
	{
        	$this->name = "dog";
		$this->type = "herbivore";
		$this->sound= "bow wow";
	}
     }

	public function __construct1($a1) {
		$this->name = $a1;     	
		$this->type = "herbivore";
		$this->sound = "bow wow";
    	}
    
	public function __construct2($a1,$a2) {
		$this->name = $a1;     	
		$this->type = $a2;
		$this->sound = "bow wow";
    	}
	public function __construct3($a1,$a2,$a3) {
		$this->name = $a1;     	
		$this->type = $a2;
		$this->sound = $a3;
    	}

	public function action()
	{
		print "$this->sound \n";	
	}
}
*/






?>
