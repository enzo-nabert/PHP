<!DOCTYPE html>
<html>
<head>
	<title>Covoiturage</title>
</head>
<body>
	<?php
		require_once "Utilisateur.php";
		require_once "Trajet.php";

		$user = new Utilisateur("assinm","assin","marc");
		$driver = new Utilisateur("terrieura","terrieur","alain");
		$trajet1 = new Trajet(array(
				'id' => "T1",
				'depart' => "mtp",
				'arrivee' => "nimes",
				'date' => "20/09/2020",
				'nbPlaces' => 4,
				'prix' => 12,
				'conducteurLogin' => $driver->getLogin(),
			)
		);

		$trajet1->afficher();
		echo "<br>";
		$trajet1->set("prix",52);
		$trajet1->afficher();
		echo "<br>";
		echo $trajet1->get("id");
	?>
</body>
</html>