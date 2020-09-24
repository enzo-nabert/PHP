<!DOCTYPE html>
<html>
<head>
	<title>Resultat</title>
</head>
<body>
	<?php
        require_once ("Voiture.php");
        $newVoiture = new Voiture($_POST['immatriculation'],$_POST['marque'],$_POST['couleur']);
        $newVoiture->save();
        echo "voiture crée :";
        $newVoiture->afficher();

	?>
</body>
</html>