<?php 

header("Content-type: text/plain");


include('../globalinclude.php');


//print "This is the handler code at /betterworks/api/handler.php\n";


$req_obj = RestUtils::processRequest(); //process the request 


/*
print "**************************REQUEST OBJECT INFORMATION******************\n";
print "Request method:".$req_obj->getMethod()."\n";
print "_GET[]:";
print_r($req_obj->getData());
print "Information within url:";
print_r($req_obj->getRequestVars());
print "http-accept:".$req_obj->getHttpAccept()."\n";//$_SERVER['HTTP_ACCEPT'];
print "************************** /REQUEST OBJECT INFORMATION******************\n\n\n\n";
*/
print '<h4> Rest Api </h4> <br>';


$outbody = '';

//At this point we have all the information necessary .. we just need to process the information... and create response.
$token = $req_obj->getRequestVars();
switch($token[1])
{
	case 'betterworks':
			  switch($token[2])
			  {
				case 'animals':  //any other stuff can go here...for eg: u can display a list of animal types here with links
						
				  		switch($token[3])
						{
							case 'herbivorous':
									switch($token[4])
									{
									 case 'horse':
									  		$horse = new Horse();
											$outbody ='<h1>'. $horse->talk().'</h1>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
									  		break;
									 case 'cow':
									  		$cow = new Cow();
											$outbody ='<h1>'. $cow->talk().'</h1>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
									  		break;	
									 case '' :      
											$outbody = '<h2>list of Herbivorous animals</h2> <br>
										<a href="'.$Root.'betterworks/animals/herbivorous/horse">horse</a> <br>
										<a href="'.$Root.'betterworks/animals/herbivorous/cow">cow</a> <br>';
											
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
											break;							
										 
									default:
										RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
										break;							
									}
									break;
							case 'carnivorous':
									switch($token[4])
									{
									  case 'tiger':
									  		$tiger = new Tiger();
											$outbody ='<h1>'. $tiger->talk().'</h1>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
									  		break;
									 case '' :      
											$outbody = '<h2>list of Carnivorous animals</h2> <br>
										<a href="'.$Root.'betterworks/animals/carnivorous/tiger">tiger</a> <br>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
											break;	
										
									  default:
											RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
											break;	
									}
									break;
							case 'omnivorous':
									switch($token[4])
									{  
									  case 'dog':
											//print "am here \n";
									  		$dog = new Dog();
											$outbody ='<h1>'. $dog->talk().'</h1>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
									  		break;
									  case 'cat':
									  		$cat = new Cat();
											$outbody ='<h1>'. $cat->talk().'</h1>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
									  		break;
									 case '' :      
											$outbody = '<h2>list of Omnivorous animals</h2> <br>
										<a href="'.$Root.'betterworks/animals/omnivorous/dog">dog</a> <br>
										<a href="'.$Root.'betterworks/animals/omnivorous/cat">cat</a> <br>';
											RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
											break;	
									  default:
											RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
											break;	
									}
									break;
							case '' :      
								$outbody = '<h2>list of Herbivorous animals</h2> <br>
								<a href="'.$Root.'betterworks/animals/herbivorous/">herbivorous animals</a> <br>
								<a href="'.$Root.'betterworks/animals/carnivorous">carnivorous animals</a><br>
								<a href="'.$Root.'betterworks/animals/omnivorous">omnivorous animals</a><br>' ;
								RestUtils::sendResponse(200,$outbody,$req_obj->getHttpAccept());
								break;	

							default:
									RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
									break;
						} //end of switch(token3, herbivorous.carnivorous.omnivorous
						break;				
				default:
					RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
					break;
							
			  }//end of switch(token2, animals
			  break;
	default://$outbody ='';
		RestUtils::sendResponse(404,$outbody,$req_obj->getHttpAccept());
		break;

}//end of switch(token1, betterworks)





//print "*******************Printing reqobj->getdata******************\n\n";
//$data = $req_object->getData();

//print_r($data);
//print "*****************************************\n\n";

/*$dog = new Dog();
$dog->mydescription();
$dog->action();
*/

/*

$animal = new Animal("tinku","herbivore","horse");
print $animal->getname()."\n";
print "****\n";

$herbivore = new Herbivore("golu","herbivore","horse","domesticandwild","grasslands");
print $herbivore->getname()."\n";
print $herbivore->getanimaltype()."\n";
print $herbivore->getspecies()."\n";
print $herbivore->gethabitat()."\n";
print $herbivore->getdomesticationtype()."\n";

print "****\n";

$carnivore = new Carnivore("noname","carnivore","alligator","wild","water");
print $carnivore->getname()."\n";
print $carnivore->getanimaltype()."\n";
print $carnivore->getspecies()."\n";
print $carnivore->gethabitat()."\n";
print $carnivore->getdomesticationtype()."\n";
print "****\n";

$omnivore = new Omnivore("noname","carnivore","bear","wild","land");
print $omnivore->getname()."\n";
print $omnivore->getanimaltype()."\n";
print $omnivore->getspecies()."\n";
print $omnivore->gethabitat()."\n";
print $omnivore->getdomesticationtype()."\n";

print "****\n";

$dog = new Dog("johnny","omnivore","dog","domestic","home","bow wow");
print $dog->getname()."\n";
print $dog->getanimaltype()."\n";
print $dog->getspecies()."\n";
print $dog->gethabitat()."\n";
print $dog->getdomesticationtype()."\n";
print $dog->getsound()."\n";

print $dog->talk()."\n";


print "****\n";

$cat = new Cat("kitty","omnivore","cat","domestic","home","meow meow");
print $cat->getname()."\n";
print $cat->getanimaltype()."\n";
print $cat->getspecies()."\n";
print $cat->gethabitat()."\n";
print $cat->getdomesticationtype()."\n";
print $cat->getsound()."\n";

print $cat->talk()."\n";


print "****\n";

$tiger = new Tiger("kitty","omnivore","cat","domestic","home","meow meow");
print $tiger->getname()."\n";
print $tiger->getanimaltype()."\n";
print $tiger->getspecies()."\n";
print $tiger->gethabitat()."\n";
print $tiger->getdomesticationtype()."\n";
print $tiger->getsound()."\n";

print $tiger->talk()."\n";
*/

?>

