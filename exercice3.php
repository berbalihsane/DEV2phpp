


<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<form method="POST" action="validation.php">
<h1>choisir une date</h1><br/><br/>
<select name="jour">
<?php 
					for ($i=1; $i <=31 ; $i++) 
					{ 
						echo"<option >".$i."</option>";
					}
				?>
				</select>

<select name="mois">
				<?php 
					for ($i=1; $i <=12 ; $i++) 
					{ 
						echo"<option >".$i."</option>";
					}
				?>
				</select>
				<select name="annee">
				<?php 
					for ($i=1900; $i <=2020; $i++) 
					{ 
						echo"<option >".$i."</option>";
					}
				?>
				</select>


<input type="button" name="envoyer" value="envoyer" >
</form>

</body>
</html>