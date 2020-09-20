<!DOCTYPE html>
<html>
<head>
	<title>Test voiture</title>
</head>
<body>
	<?php  
		require_once("Voiture.php");
		$voiture1 = new Voiture("renault","rouge","AB 25 CD");
		$voiture2 = new Voiture("renault","verte","ABC 25 CD");
		$voiture1->afficher();
		$voiture2->afficher();
	?>
</body>
</html>