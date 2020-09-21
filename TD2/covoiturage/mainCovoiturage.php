<!DOCTYPE html>
<html>
<head>
	<title>Covoiturage</title>
</head>
<body>
	<?php
		require_once "Utilisateur.php";
		require_once "Trajet.php";
		$tab_utilisateurs = Utilisateur::getAllUtilisateurs();
		$tab_trajets = Trajet::getAllTrajets();

		foreach ($tab_utilisateurs as $value ){
		    $value->afficher();
        }

        foreach ($tab_trajets as $value) {
            $value->afficher();
		}
	?>
</body>
</html>