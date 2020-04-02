<?php

	$password 	= $_POST['password'];
	$mail 		= $_POST['email'];
	function verifier_passwor(){
		$password 	= $_POST['password'];
		if (strlen($password) < 8) {
		    echo "Mot de passe trop court !<br>";}


	    $password = $_POST['pass'];
	 
	    if (preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[%$&!?/#@])~', $password)) {
	        echo "Mot de passe ".'<span style="color:green;"><b>est valide</b></span><br>';	
	        return true;}
	    else {echo "Mot de passe ".'<span style="color:red;"><b>est non valide</b></span><br>';
			return false;}
	}
	function email()
	{
		$mail = $_POST['email'];
		if (strpos($mail,".com") !== false) 
		{
			echo "email est valide" ;
		}
		else{
			echo "email non valide";
		}
	}
	function verifier_mail()
	{
		$mail = $_POST['email'];
		if (strpos($mail,".com") !== false) 
		{
			return true;
		}
		else{
			return false;
		}
	}

	
	
	function motdepasse(){
	    $password = $_POST['password'];
	    if (preg_match('~^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[%$&!?/#@])~', $password)) 
	    	{return true;}
	    else {return false;	}
	}

	

	$f=fopen("login.txt","r+");

	while($str=fgets($f)){
				$arr=explode('|',$str);
                foreach ($arr as $k) {
                	echo $k."<br>";
                }
            }

  	if((stristr($str,$mail) == TRUE && stristr($str,$password)) == TRUE)
   	echo "Authentification réussie";

  	elseif(stristr($str,$mail) == TRUE && stristr($str,$password) == FALSE) 
   	echo "Mot de passe invalide";
  
   	else 
   	echo "sLogin inexistant";
  	

?>