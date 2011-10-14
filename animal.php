<?php
class Animal{
	protected $name;
	protected $type;
	public function __construct($name="unknown",$type="unknown",$species="unknown")
	{
		$this->name = $name; //say if a dog has name pluto 
		$this->type = $type; //herbivore or carnivore or omnivore
		$this->species = $species; //a dog or cat or elephant
	} 
	 
	public function getname()
	{
		return $this->name;
	}
	public function getanimaltype()
	{
		return $this->type;
	}
	public function getspecies()
	{
		return $this->species;
	}
	public function setname($name)
	{
		$this->name=$name;
	}
	public function settype($type)
	{
		$this->type = $type;
	}
	public function setspecies($species)
	{
		$this->species=$species;
	}


}



/*class Animal {
	protected $name;
	protected $type;
	protected $sound;

	public function __construct() 
        { 
    	    $a = func_get_args(); 
    	    $i = func_num_args(); 
    	    if (method_exists($this,$f='__construct'.$i)) { 
    	        call_user_func_array(array($this,$f),$a); 
    	    } 
	    else	//default values
		{
    	    		$this->name = "unknown";
			$this->type = "unknown";
			$this->sound= "unknown";
		}
	 }

	public function __construct1($a1) {
		$this->name = $a1;     	
		$this->type = "unknown";
		$this->sound = "unknown";
    	}
    
	public function __construct2($a1,$a2) {
		$this->name = $a1;     	
		$this->type = $a2;
		$this->sound = "unknown";
    	}
	public function __construct3($a1,$a2,$a3) {
		$this->name = $a1;     	
		$this->type = $a2;
		$this->sound = $a3;
    	}
	public function mydescription()
	{
		print "I am an $this->name am of type $this->type \n";
	}

	public function action()
	{
		print "\nError: implementation of action() for class:$this->name is missing \n";	
	}


}


*/
?>

