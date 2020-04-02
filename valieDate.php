<?php
		$jour = $_POST["jour"];
		$mois = $_POST["mois"];
		$annee = $_POST["annee"];

		echo "La date saisie est : ".$jour."/".$mois."/".$annee."<br>";

		if (checkdate($mois,$jour,$annee))		
			echo "La date saisie est valide";
		 elseif($mois == 2)
		 	echo "L'annee ".$annee." est non bissextile : Date ivalide;
		 
		
	?>



























































































?>